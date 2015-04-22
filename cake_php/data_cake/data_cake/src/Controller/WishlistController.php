<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wishlist Controller
 *
 * @property \App\Model\Table\WishlistTable $Wishlist
 */
class WishlistController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wishlist', $this->paginate($this->Wishlist));
        $this->set('_serialize', ['wishlist']);
    }

    /**
     * View method
     *
     * @param string|null $id Wishlist id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wishlist = $this->Wishlist->get($id, [
            'contain' => []
        ]);
        $this->set('wishlist', $wishlist);
        $this->set('_serialize', ['wishlist']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wishlist = $this->Wishlist->newEntity();
        if ($this->request->is('post')) {
            $wishlist = $this->Wishlist->patchEntity($wishlist, $this->request->data);
            if ($this->Wishlist->save($wishlist)) {
                $this->Flash->success('The wishlist has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wishlist could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wishlist'));
        $this->set('_serialize', ['wishlist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wishlist id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wishlist = $this->Wishlist->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wishlist = $this->Wishlist->patchEntity($wishlist, $this->request->data);
            if ($this->Wishlist->save($wishlist)) {
                $this->Flash->success('The wishlist has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The wishlist could not be saved. Please, try again.');
            }
        }
        $this->set(compact('wishlist'));
        $this->set('_serialize', ['wishlist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wishlist id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wishlist = $this->Wishlist->get($id);
        if ($this->Wishlist->delete($wishlist)) {
            $this->Flash->success('The wishlist has been deleted.');
        } else {
            $this->Flash->error('The wishlist could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
