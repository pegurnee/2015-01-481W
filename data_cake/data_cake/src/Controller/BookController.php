<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Book Controller
 *
 * @property \App\Model\Table\BookTable $Book
 */
class BookController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Author', 'Publisher']
        ];
        $this->set('book', $this->paginate($this->Book));
        $this->set('_serialize', ['book']);
    }

    /**
     * View method
     *
     * @param string|null $id Book id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $book = $this->Book->get($id, [
            'contain' => ['Author', 'Publisher', 'Genre']
        ]);
        $this->set('book', $book);
        $this->set('_serialize', ['book']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $book = $this->Book->newEntity();
        if ($this->request->is('post')) {
            $book = $this->Book->patchEntity($book, $this->request->data);
            if ($this->Book->save($book)) {
                $this->Flash->success('The book has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The book could not be saved. Please, try again.');
            }
        }
        $author = $this->Book->Author->find('list', ['limit' => 200]);
        $publisher = $this->Book->Publisher->find('list', ['limit' => 200]);
        $genre = $this->Book->Genre->find('list', ['limit' => 200]);
        $this->set(compact('book', 'author', 'publisher', 'genre'));
        $this->set('_serialize', ['book']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Book id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $book = $this->Book->get($id, [
            'contain' => ['Genre']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $book = $this->Book->patchEntity($book, $this->request->data);
            if ($this->Book->save($book)) {
                $this->Flash->success('The book has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The book could not be saved. Please, try again.');
            }
        }
        $author = $this->Book->Author->find('list', ['limit' => 200]);
        $publisher = $this->Book->Publisher->find('list', ['limit' => 200]);
        $genre = $this->Book->Genre->find('list', ['limit' => 200]);
        $this->set(compact('book', 'author', 'publisher', 'genre'));
        $this->set('_serialize', ['book']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Book id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $book = $this->Book->get($id);
        if ($this->Book->delete($book)) {
            $this->Flash->success('The book has been deleted.');
        } else {
            $this->Flash->error('The book could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
