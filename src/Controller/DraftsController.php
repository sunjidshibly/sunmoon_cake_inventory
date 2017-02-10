<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Drafts Controller
 *
 * @property \App\Model\Table\DraftsTable $Drafts
 */
class DraftsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $drafts = $this->paginate($this->Drafts);

        $this->set(compact('drafts'));
        $this->set('_serialize', ['drafts']);
    }

    /**
     * View method
     *
     * @param string|null $id Draft id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $draft = $this->Drafts->get($id, [
            'contain' => []
        ]);

        $this->set('draft', $draft);
        $this->set('_serialize', ['draft']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $draft = $this->Drafts->newEntity();
        if ($this->request->is('post')) {
            $draft = $this->Drafts->patchEntity($draft, $this->request->data);
            if ($this->Drafts->save($draft)) {
                $this->Flash->success(__('The draft has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The draft could not be saved. Please, try again.'));
        }
        $this->set(compact('draft'));
        $this->set('_serialize', ['draft']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Draft id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $draft = $this->Drafts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $draft = $this->Drafts->patchEntity($draft, $this->request->data);
            if ($this->Drafts->save($draft)) {
                $this->Flash->success(__('The draft has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The draft could not be saved. Please, try again.'));
        }
        $this->set(compact('draft'));
        $this->set('_serialize', ['draft']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Draft id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $draft = $this->Drafts->get($id);
        if ($this->Drafts->delete($draft)) {
            $this->Flash->success(__('The draft has been deleted.'));
        } else {
            $this->Flash->error(__('The draft could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
