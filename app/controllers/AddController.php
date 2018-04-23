<?php
use Phalcon\Mvc\View;
class AddController extends ControllerBase{
 
 public function indexAction(){
  if($this->request->isPost()){
    $temp=new Event();
  $temp->name=trim($this->request->getPost('name'));
  $temp->date=trim($this->request->getPost('day'));
  $temp->detail=trim($this->request->getPost('detail'));
  $temp->picture=trim($this->request->getPost('file'));
  $temp->save();
  $this->response->redirect('event');
  }
  
  }

}
