<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;

/**
 * Sells Controller
 *
 * @property \App\Model\Table\SellsTable $Sells
 */
class SellsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $sells = $this->paginate($this->Sells);

        $this->set(compact('sells'));
        $this->set('_serialize', ['sells']);


        // $ta_form_types = TableRegistry::get('FormTypes');
        // $form_types = $ta_form_types->find();
        // $this->set('form_types', $form_types);
    }

    /**
     * View method
     *
     * @param string|null $id Sell id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sell = $this->Sells->get($id, [
            'contain' => []
        ]);

        $this->set('sell', $sell);
        $this->set('_serialize', ['sell']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $ta_products = TableRegistry::get('Products');
        $products = $ta_products->find()->toArray();
        $this->set('products', $products);


      
      


        $sell = $this->Sells->newEntity();
        if ($this->request->is('post')) {
            $sell = $this->Sells->patchEntity($sell, $this->request->data);
            if ($this->Sells->save($sell)) {
                $this->Flash->success(__('The sell has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sell could not be saved. Please, try again.'));
        }
        $this->set(compact('sell'));
        $this->set('_serialize', ['sell']);
    
     }


    /**
     * Edit method
     *
     * @param string|null $id Sell id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id)
    {
        $sell = $this->Sells->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sell = $this->Sells->patchEntity($sell, $this->request->data);
            if ($this->Sells->save($sell)) {
                $this->Flash->success(__('The sell has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sell could not be saved. Please, try again.'));
        }
        $this->set(compact('sell'));
        $this->set('_serialize', ['sell']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sell id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sell = $this->Sells->get($id);
        if ($this->Sells->delete($sell)) {
            $this->Flash->success(__('The sell has been deleted.'));
        } else {
            $this->Flash->error(__('The sell could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function getProduct($product_code)
    {
        $ta_products = TableRegistry::get('Products');
        $products = $ta_products->find()->toArray();

        $products = $ta_products->find()->Where(['product_code' => $product_code])->first();

            $this->response->type('application/json');
            $this->response->body(json_encode($products));
            return $this->response;
}

}



