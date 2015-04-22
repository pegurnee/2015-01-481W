<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Review Controller
 *
 * @property \App\Model\Table\ReviewTable $Review
 */
class ReviewController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('review', $this->paginate($this->Review));
        $this->set('_serialize', ['review']);
    }

    /**
     * View method
     *
     * @param string|null $id Review id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $review = $this->Review->get($id, [
            'contain' => []
        ]);
        $this->set('review', $review);
        $this->set('_serialize', ['review']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $review = $this->Review->newEntity();
        if ($this->request->is('post')) {
            $review = $this->Review->patchEntity($review, $this->request->data);
            if ($this->Review->save($review)) {
                $this->Flash->success('The review has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The review could not be saved. Please, try again.');
            }
        }
        $this->set(compact('review'));
        $this->set('_serialize', ['review']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Review id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $review = $this->Review->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $review = $this->Review->patchEntity($review, $this->request->data);
            if ($this->Review->save($review)) {
                $this->Flash->success('The review has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The review could not be saved. Please, try again.');
            }
        }
        $this->set(compact('review'));
        $this->set('_serialize', ['review']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Review id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $review = $this->Review->get($id);
        if ($this->Review->delete($review)) {
            $this->Flash->success('The review has been deleted.');
        } else {
            $this->Flash->error('The review could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
