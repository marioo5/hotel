<?php 

class BlogController extends Controller{

    public function index() {

        $blog = new Blogs();

        if(isset($_REQUEST['page'])){
            $page = $_REQUEST['page'];
        }else{
            $page = "1";
        }

        $perPage = 8;
        $numRows = $blog->count();
        $numPages = ceil($numRows/$perPage);
        $offset = ($page-1) * $perPage;

        $blogs = $blog->offset($offset)->limit($perPage)->get();

        $this->view('blog.html', ['blogs' => $blogs, 'numpages' => $numPages, 'page' => $page]);
    }

}

?>