<?php 
class Articlesmodel extends CI_Model
{
    public function count_all_articles()
    {
        $user_id = $this->session->userdata('user_id');
        $query= $this->db->select(['title','id'])
                           ->from('articles')
                           ->get();
                           
         return $query->num_rows();

    }
    public function num_rows()
    {
       $user_id = $this->session->userdata('user_id');
        $query= $this->db->select(['title','id'])
                           ->from('articles')
                           ->where('user_id',$user_id)
                           ->get();
                           
         return $query->num_rows();
    }
    public function all_articles_list($limit,$offset)
    {
      
       $query= $this->db->select(['title','id','image_path','created_at'])
                          ->from('articles')
                          ->order_by('created_at','DESC')
                          ->limit($limit,$offset)
                          ->get();
                          
        return $query->result();
    }
    public function articles_list($limit,$offset)
    {
       $user_id = $this->session->userdata('user_id');
       $query= $this->db->select(['title','id'])
                          ->from('articles')
                          ->where('user_id',$user_id)
                          ->limit($limit,$offset)
                          ->get();
                          
        return $query->result();
    }
    public function add_article($array)
    {
        return $this->db->insert('articles',$array);

    }
    public function findarticle($article_id)
{
    $q=$this->db->select(['id','title','body','image_path'])
    ->where('id',$article_id)
    ->get('articles');

return $q->row();
}
public function search($query,$limit,$offset)
{
$q=$this->db->like('title',$query)->limit($limit,$offset)->get('articles');
return $q->result();
}
public function count_search_results($query)
{
$q=$this->db->from('articles')->like('title',$query)->get();
return $q->num_rows();
}
public function find($id)
{
   $q= $this->db->from('articles')->where('id',$id)->get();
if ($q->num_rows())
    return $q->row();
return false;
}
public function update_article($article_id,Array $article)
{
    return $this->db->where('id',$article_id)->update('articles',$article);
}
public function delete_article($article_id)
{   
    return $this->db->delete('articles',['id'=>$article_id]);
}
}
?>