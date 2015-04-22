<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Author Controller
 *
 * @property \App\Model\Table\AuthorTable $Author
 */
class AuthorController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('author', $this->paginate($this->Author));
        $this->set('_serialize', ['author']);
    }

    /**
     * View method
     *
     * @param string|null $id Author id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $author = $this->Author->get($id, [
            'contain' => ['Book']
        ]);
        $this->set('author', $author);
        $this->set('_serialize', ['author']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $author = $this->Author->newEntity();
        if ($this->request->is('post')) {
            $author = $this->Author->patchEntity($author, $this->request->data);
            if ($this->Author->save($author)) {
                $this->Flash->success('The author has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The author could not be saved. Please, try again.');
            }
        }
        $this->set(compact('author'));
        $this->set('_serialize', ['author']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Author id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $author = $this->Author->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $author = $this->Author->patchEntity($author, $this->request->data);
            if ($this->Author->save($author)) {
                $this->Flash->success('The author has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The author could not be saved. Please, try again.');
            }
        }
        $this->set(compact('author'));
        $this->set('_serialize', ['author']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Author id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $author = $this->Author->get($id);
        if ($this->Author->delete($author)) {
            $this->Flash->success('The author has been deleted.');
        } else {
            $this->Flash->error('The author could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
