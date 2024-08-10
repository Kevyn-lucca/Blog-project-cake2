<?php
class TypesController extends AppController
{
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function type()
    {
        $this->layout = 'ajax';

        $this->loadModel('Type');
        $types = $this->Type->find('all');

        $this->set('types', $types);

        // echo "<pre>";
        // print_r($posts);exit;

    }

    public function view($id)
    {
        $this->layout = 'ajax';
        
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $type = $this->Type->findById($id);
        if (!$type) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $type);

    }

    public function add()
    {
        $this->layout = 'ajax';
        $this->loadModel('Type');
        $types = $this->Type->find('all');

        $this->set('types', $types);

        if ($this->request->is('post')) {
            $this->Type->create();
            if ($this->Type->save($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'type'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }

    public function edit($id = null)
    {
        $this->layout = 'ajax';
        $this->loadModel('Type');
        
        if (!$id) {
            throw new NotFoundException(__('Invalid type'));
        }
    
        $type = $this->Type->findById($id);
        if (!$type) {
            throw new NotFoundException(__('Type not found'));
        }
        
        $this->set('types', $type);
    
        if ($this->request->is(array('post', 'put'))) {
            $this->Type->id = $id;
    
            if ($this->Type->save($this->request->data)) {
                $this->Flash->success(__('Your type has been updated.'));
                return $this->redirect(array('action' => 'type'));
            }
            $this->Flash->error(__('Unable to update your type.'));
        }
    
        if (!$this->request->data) {
            $this->request->data = $type;
        }
    }

    public function delete($id)
    {
        $this->layout = 'ajax';
        $this->loadModel('Type');
        if ($this->request->is('post,put,get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Type->delete($id)) {
            $this->Flash->success(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'type'));
    }
}