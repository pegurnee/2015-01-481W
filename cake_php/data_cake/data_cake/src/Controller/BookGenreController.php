<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BookGenre Controller
 *
 * @property \App\Model\Table\BookGenreTable $BookGenre
 */
class BookGenreController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Genre']
        ];
        $this->set('bookGenre', $this->paginate($this->BookGenre));
        $this->set('_serialize', ['bookGenre']);
    }

    /**
     * View method
     *
     * @param string|null $id Book Genre id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bookGenre = $this->BookGenre->get($id, [
            'contain' => ['Genre']
        ]);
        $this->set('bookGenre', $bookGenre);
        $this->set('_serialize', ['bookGenre']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bookGenre = $this->BookGenre->newEntity();
        if ($this->request->is('post')) {
            $bookGenre = $this->BookGenre->patchEntity($bookGenre, $this->request->data);
            if ($this->BookGenre->save($bookGenre)) {
                $this->Flash->success('The book genre has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The book genre could not be saved. Please, try again.');
            }
        }
        $genre = $this->BookGenre->Genre->find('list', ['limit' => 200]);
        $this->set(compact('bookGenre', 'genre'));
        $this->set('_serialize', ['bookGenre']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Book Genre id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bookGenre = $this->BookGenre->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookGenre = $this->BookGenre->patchEntity($bookGenre, $this->request->data);
            if ($this->BookGenre->save($bookGenre)) {
                $this->Flash->success('The book genre has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The book genre could not be saved. Please, try again.');
            }
        }
        $genre = $this->BookGenre->Genre->find('list', ['limit' => 200]);
        $this->set(compact('bookGenre', 'genre'));
        $this->set('_serialize', ['bookGenre']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Book Genre id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bookGenre = $this->BookGenre->get($id);
        if ($this->BookGenre->delete($bookGenre)) {
            $this->Flash->success('The book genre has been deleted.');
        } else {
            $this->Flash->error('The book genre could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
