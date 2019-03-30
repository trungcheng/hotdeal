<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $viewsFolder = null;

    protected $currentCallingControllerName = null;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            view()->share('signedIn', auth()->check());
            view()->share('authUser',  auth()->user());

            return $next($request);
        });

    }

    /**
     * Resize and Save image
     *
     * @param $image
     * @param string $directory
     * @param array $size
     *
     * @return string
     */
    public function saveImage($image, $directory = '', $size = ['width' => 500, 'height' => 600])
    {
        try {
            $directory = str_replace('.', DIRECTORY_SEPARATOR, $directory);
            $imageRealPath = $image->getRealPath();
            $timestamp = Carbon::now()->format('Y-m-d-H-i-s');
            $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $thumbName = $timestamp . '-' . str_slug($fileName, "-") . '.' . $extension;

            $img = Image::make($imageRealPath);

            if ($img->width() > $size['width']) {
                $img->resize(intval($size['width']), null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            if ($img->height() > $size['height']) {
                $img->resize(null, intval($size['height']), function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            
            $pathToDirectory =  '/backend/uploads/' . $directory . '/';
            if (!$this->checkAndMakeDirectory($pathToDirectory)) {
                return false;
            }

            $path = $pathToDirectory . $thumbName;
            $img->save(public_path() . $path);

            return $path;
        } catch (Exception $e) {
            return false;
        }
    }

    public function saveImageWithoutResize($image, $directory = '')
    {
    	try {
            $directory = str_replace('.', DIRECTORY_SEPARATOR, $directory);
            $imageRealPath = $image->getRealPath();
            $timestamp = Carbon::now()->format('Y-m-d-H-i-s');
            $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $thumbName = $timestamp . '-' . str_slug($fileName, "-") . '.' . $extension;

            $img = Image::make($imageRealPath);
            
            $pathToDirectory =  '/backend/uploads/' . $directory . '/thumbs/';
            if (!$this->checkAndMakeDirectory($pathToDirectory)) {
                return false;
            }

            $path = $pathToDirectory . $thumbName;
            $img->save(public_path() . $path);

            return $path;
        } catch (Exception $e) {
            return false;
        }
    }

    public function saveImageWithoutResizeForThumb($image, $path)
    {
    	try {
    		$path = str_replace('/thumbs', '', $path);
            $imageRealPath = $image->getRealPath();
            $img = Image::make($imageRealPath);
            $img->save(public_path() . $path);

            return $path;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Delete image by path
     *
     * @param string $path
     *
     * @return mixed
     */
    public function deleteImage($path)
    {
        $realPath = public_path($path);
        if (File::exists($realPath)) {
            return File::delete($realPath);
        }

        return true;
    }
    
    /**
     * Delete list image by list path
     *
     * @param string $listpath
     *
     * @return mixed
     */
    public function deleteListImage($listPath)
    {
        foreach ($listPath as $key => $value) {
            $realPath = public_path($value);
            if (File::exists($realPath)) {
                File::delete($realPath);
            }
        }
    }

    /**
     * Create directory if it don't exist
     *
     * @param string $path
     *
     * @return bool
     */
    protected function checkAndMakeDirectory($path)
    {
        $realPath = public_path($path);
        if (!File::exists($realPath)) {
            return File::makeDirectory($realPath, 0775, true);
        }

        return true;
    }

    protected function getViewsFolder()
    {
        if (is_null($this->viewsFolder)) {
            $folder = strtolower($this->getCurrentCallingControllerName());
            $paths = resource_path('views') . DIRECTORY_SEPARATOR . $folder;
            if (!is_dir($paths)) {
                throw new DirectoryNotFoundException("Directory {$paths} not found");
            }
            // /backend/uploads/products/123.png
            $this->viewsFolder = $folder;
        }

        return $this->viewsFolder;
    }

    protected function getCurrentCallingControllerName()
    {
        if (is_null($this->currentCallingControllerName)) {
            $namespace = explode('\\', get_class($this));
            $this->currentCallingControllerName = strtolower(str_replace('Controller', '', end($namespace)));
        }

        return $this->currentCallingControllerName;
    }
}
