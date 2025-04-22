<?php
use Imy\Core\Controller;

class MainController extends Controller
{
    function init()
    {
        $this->v['reviews'] = $this->getAllReviews();
    }

    function ajax_test() {
        M('review')
            ->factory()
            ->setValues([
                'name' => $_POST['name'],
                'message' => $_POST['message'],
                'date' => date('Y-m-d H:m:s')
            ])
            ->save();

        $this->v['reviews'] = $this->getAllReviews();
    }

    private function getAllReviews() : array
    {
        $queryDb = M('review')->get()->fetchAll();

        return array_map(function($model) {
            return [
                'name' => $model->name,
                'message' => $model->message,
                'date' => $model->date
            ];
        }, $queryDb);
    }

}
