<?php



class BlogController implements Controller{
    
    private $model;


    public function __construct() {
        include './model/BlogModel.php';
        
        $this->model = new BlogModel();
    }
    
    public function getPosts(){
        $posts = $this->model->getPosts();
        var_dump($posts);
        include './view/posts.php';
    }
    
    public function getPost($idBlog){
        $post = $this->model->getPost($idBlog);
        var_dump($post);
        include './view/post.php';
    }
    
    public function render(){

    }
    
}
