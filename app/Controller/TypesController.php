<?php
class TypesController extends AppController
{
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function index()
    {
        $this->layout = 'ajax';

        $posts = $this->Post->find('all');

        // echo "<pre>";
        // print_r($posts);exit;

        $this->set('posts', $posts);
    }

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
        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);

    }

    public function add()
    {
        $this->layout = 'ajax';
        $this->loadModel('Type');
        $types = $this->Type->find('all');

        $this->set('types', $types);

        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }

    public function edit($id = null)
    {
        $this->layout = 'ajax';
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        $this->set('posts', $post);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;

            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    public function delete($id)
    {
        $this->layout = 'ajax';
        if ($this->request->is('post,put,get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Post->delete($id)) {
            $this->Flash->success(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }
}