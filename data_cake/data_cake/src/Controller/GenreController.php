<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Genre Controller
 *
 * @property \App\Model\Table\GenreTable $Genre
 */
class GenreController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('genre', $this->paginate($this->Genre));
        $this->set('_serialize', ['genre']);
    }

    /**
     * View method
     *
     * @param string|null $id Genre id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $genre = $this->Genre->get($id, [
            'contain' => ['Book']
        ]);
        $this->set('genre', $genre);
        $this->set('_serialize', ['genre']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $genre = $this->Genre->newEntity();
        if ($this->request->is('post')) {
            $genre = $this->Genre->patchEntity($genre, $this->request->data);
            if ($this->Genre->save($genre)) {
                $this->Flash->success('The genre has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The genre could not be saved. Please, try again.');
            }
        }
        $book = $this->Genre->Book->find('list', ['limit' => 200]);
        $this->set(compact('genre', 'book'));
        $this->set('_serialize', ['genre']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Genre id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $genre = $this->Genre->get($id, [
            'contain' => ['Book']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $genre = $this->Genre->patchEntity($genre, $this->request->data);
            if ($this->Genre->save($genre)) {
                $this->Flash->success('The genre has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The genre could not be saved. Please, try again.');
            }
        }
        $book = $this->Genre->Book->find('list', ['limit' => 200]);
        $this->set(compact('genre', 'book'));
        $this->set('_serialize', ['genre']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Genre id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $genre = $this->Genre->get($id);
        if ($this->Genre->delete($genre)) {
            $this->Flash->success('The genre has been deleted.');
        } else {
            $this->Flash->error('The genre could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
