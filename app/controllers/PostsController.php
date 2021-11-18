<?php

class PostsController extends Controller
{

    public function index()
    {

        $blog = new Posts();

        if (isset($_REQUEST['page'])) {
            $page = $_REQUEST['page'];
        } else {
            $page = "1";
        }

        $perPage = 8;
        $numRows = $blog->count();
        $numPages = ceil($numRows / $perPage);
        $offset = ($page - 1) * $perPage;

        $blog = $blog->offset($offset)->limit($perPage)->get();

        $this->view('blog.html', ['posts' => $blog, 'numpages' => $numPages, 'page' => $page]);
    }

    public function delete($id)
    {

        if (isset($_SESSION['is_logged_in'])) {
            $blog = new Posts();
            $blog = $blog->destroy($id);
            header("Location: " . ROOT_URL . "/posts");
        }
    }

    public function add()
    {

        if (isset($_SESSION['is_logged_in'])) {

            if ($_SERVER['REQUEST_METHOD'] == 'GET') {

                $cat = new Categories();
                $cats = $cat->all();
                $this->view('add.html', ['categories' => $cats]);
            } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $blog = new Posts();
                $blog->loadData($post);
                $blog->publisher = $_SESSION['user_data']['id'];
                if ($blog->validate()) {

                    $blog->save();
                    if (!is_uploaded_file($_FILES['cover']['tmp_name'])) {
                        $error = 'There was no file uploaded!';
                        Messages::setMsg($error, 'error');
                        $this->view('add.html');
                        return;
                    }
                    $uploadfile = $_FILES['cover']['tmp_name'];
                    $uploaddata['filedata'] = file_get_contents($uploadfile);
                    $uploaddata['filename'] = $_FILES['cover']['name'];
                    $uploaddata['mimetype'] = $_FILES['cover']['type'];
                    $file = new Files;
                    $file->loadData($uploaddata);
                    if ($file->validate()) {
                        $blog->files()->save($file);
                        Messages::setMsg('blog create perfectly !', 'success');
                        header("Location: " . ROOT_URL . "/posts");
                    } else {
                        $blog = 'There was an error while uploading the file';
                    }
                }
            }
        }
    }

    public function edit($id)
    {

        if (isset($_SESSION['is_logged_in'])) {

            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $cat = new Categories();
                $cats = $cat->all();
                $blog = new Posts();
                $blog = $blog->find($id);
                $this->view('edit.html', ['post' => $blog, 'categories' => $cats]);
            } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $blog = new Posts();
                $blog = $blog->find($id);
                $blog->title = $post['title'];
                $blog->text = $post['text'];
                $blog->category = $post['category'];
                $blog->publisher = $_SESSION['user_data']['id'];

                    if (is_uploaded_file($_FILES['cover']['tmp_name'])) {
                        // $blog = $blog->files->where('posts_id', '=', $id);
                        // $blog = $blog->destroy($id);
                        $uploadfile = $_FILES['cover']['tmp_name'];
                        $uploaddata['filedata'] = file_get_contents($uploadfile);
                        $uploaddata['filename'] = $_FILES['cover']['name'];
                        $uploaddata['mimetype'] = $_FILES['cover']['type'];
                        $file = new Files;
                        $file->loadData($uploaddata);
                        $blog->files()->save($file);
                        
                        
                    }

                    $blog->save();
                    header("Location: " . ROOT_URL . "/posts");
                    
            }
        }
    }
}
