<?php
    class Home extends Controller {
        public function index() {
            if (isset($_COOKIE['login'])) {
                $shortModel = $this->model('ShortLink');
                $shortLinks = $shortModel->getShort();
                return $this->view('home/index', ['shortLinks' => $shortLinks]);
            } else {
                // User is not authorized, you can handle this case accordingly
                $this->view('home/index');
            }
        }

}
