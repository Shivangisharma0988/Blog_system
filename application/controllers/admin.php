<?php 
class Admin extends MY_Controller
{
    public function dashboard($offset=0)
   
    {
     $this->load->model('articlesmodel','articles');
        $this->load->library('pagination');
        $config=[
            'base_url'=> base_url('admin/dashboard'),
            'per_page'=>5,
            'total_rows'=> $this->articles->num_rows(),
            'full_tag_open'=>"<ul class='pagination'>",
            'full_tag_close'=>"</ul>",
            'first_tag_open'=>'</li>',
            'first_tag_close'=>'</li>',
            'last_tag_open'=>'</li>',
            'last_tag_close'=>'</li>',
            'next_tag_open'=>'</li>',
            'next_tag_close'=>'</li>',
            'prev_tag_open'=>'</li>',
            'prev_tag_close'=>'</li>',
            'num_tag_open'=>'</li>',
            'num_tag_close'=>'</li>',
            'cur_tag_open'=>'</li>',
            'cur_tag_close'=>'</li>',
        ];
        $this->pagination->initialize($config); 

        $this->load->model('articlesmodel','articles');
        $articles=$this->articles->articles_list($config['per_page'],$this->uri->segment(3));
        // print_r($articles);die;
        $this->load->view('admin/dashboard',['articles'=>$articles]);
    }
    public function add_article()
    {
$this->load->view('admin/add_article');
    }
    public function store_article()
    {
        $config=[
            'upload_path' => './uploads',
            'allowed_types' => 'jpeg|gif|png|jpg'
        ];
       $this->load->library('form_validation');
       $this->load->library('upload',$config);
       if($this->form_validation->run('add_articles_rules') && $this->upload->do_upload('userfile'))
       {
        $file = $_FILES['userfile']['name'];

        $this->upload->do_upload('userfile');
           $post=$this->input->post();
           $post['image_path']=$file;
           unset($post['submit']);
         //  unset($post['userfile']);
          $this->load->model('articlesmodel','articles');
         if( $this->articles->add_article($post))
         {
//insert
          $this->session->set_flashdata('feedback','Data Inserted Succesfully!!');
        
         }
         else{
//failed
$this->session->set_flashdata('feedback','Data Not Inserted .Plz try Again!!');
         }
           
return redirect('admin/dashboard');
       }
       else{
           $this->load->view('admin/add_article');
       }
    }
    public function edit_article($article_id)
    {
  $this->load->model('articlesmodel','articles');
  $article=$this->articles->findarticle($article_id);
  $this->load->view('admin/edit_article',['article'=>$article]);
        
    }
    public function update_article($article_id)
    {
        $this->load->library('form_validation');
        if($this->form_validation->run('add_articles_rules'))
        {
            
            $post=$this->input->post();
            unset($post['submit']);
           $this->load->model('articlesmodel','articles');
          if( $this->articles->update_article($article_id,$post))
          {
 //insert
           $this->session->set_flashdata('feedback','Data updated Succesfully!!');
         
          }
          else{
 //failed
 $this->session->set_flashdata('feedback','Data Not updated .Plz try Again!!');
          }
            
 return redirect('admin/dashboard');
        }
        else{
            $this->load->view('admin/edit_article');
        }
     }
    public function delete_article()
    {
        //$post = $this->input->post();
        $article_id=$this->input->post('article_id');
        $this->load->model('articlesmodel','articles');
        
          if( $this->articles->delete_article($article_id))
          {
 //insert
           $this->session->set_flashdata('feedback','Data deleted Succesfully!!');
         
          }
          else{
 //failed
 $this->session->set_flashdata('feedback','Data Not deleted.Plz try Again!!');
          }
            
 return redirect('admin/dashboard');
        }
       
     
    public function _construct()
    {
        parent::_construct();
        if(!$this->session->userdata['user_id'])
        return redirect('login');
    }
}

?>