<?php

class Shorten extends Controller {
    public function index() {
        $data = [];

        if (isset($_POST['short'])) {
            $short = $this->model('ShortLink');
            $short->setData($_POST['short'], $_POST['link']);

            $isValid = $short->validForm();

            if ($isValid == "Верно") {
                $short->addShort();
            } else {
                $data['message'] = $isValid;
            }
        }

        $shortModel = $this->model('ShortLink');
        $shortLinks = $shortModel->getShort();

        // Pass $data to the view
        $this->view('home/index', ['shortLinks' => $shortLinks, 'data' => $data]);
    }



    public function delete() {
        if (isset($_POST['short_id'])) {
            $shortModel = $this->model('ShortLink');
            $shortModel->deleteShort($_POST['short_id']);
        }
        $shortModel = $this->model('ShortLink');
        $shortLinks = $shortModel->getShort();

        $this->view('home/index', ['shortLinks' => $shortLinks]);
    }
}