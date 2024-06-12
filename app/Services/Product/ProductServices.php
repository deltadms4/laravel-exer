<?php

namespace App\Services\Product;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class ProductServices
{
    public function store($data)
    {
        if (isset($data['image']))
        {
            $images = $data['image'];

            foreach ($images as $image) {
                $filename = $image->store('/images');
                $imageData[] = $filename;
            }

            $imageModel = new Product();
            $imageModel->image = serialize($imageData);
            $data['image'] = $imageData;
        }

//        if (isset($data['video']))
//        {
//            $video = $data['video'];
//            $video->move('upload', $video->getClientOriginalName());
//            $video_name = $video->getClientOriginalName();
//
//            $videoModel = new Product();
//            $videoModel->video = $video_name;
//            $videoModel->save();
//        }

        if (isset($data['video']))
        {
            $videos = $data['video'];

            foreach ($videos as $video) {
                $filename = $video->store('videos');
                $videoData[] = $filename;
            }

            $videoModel = new Product();
            $videoModel->video = serialize($videoData);
            $data['video'] = $videoData;
        }

        if (isset($data['animation']))
        {
            $treeD_animations = $data['animation'];

            foreach ($treeD_animations as $treeD_animation) {
                $filename = $treeD_animation->store('animations');
                $treeD_animationData[] = $filename;
            }

            $treeD_animationModel = new Product();
            $treeD_animationModel->treeD_animation = serialize($treeD_animationData);
            $data['animation'] = $treeD_animationData;
        }


        $product = Product::firstOrCreate($data);

        return $product;

    }

}
