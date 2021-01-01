<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PackageRequest;
use App\Models\Post;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PackageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PackageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Package::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/package');
        CRUD::setEntityNameStrings('package', 'packages');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'image',
            'type' => 'image',
            'height' => '50px',
            'width' => '50px'
        ]);
        CRUD::addColumn([
            'name' => 'new',
            'type' => 'closure',
            'function' => function($entry) {
                return $entry->new ? 'New' : '';
            }
        ]);
        CRUD::addColumn([
            'name' => 'title',
        ]);
        CRUD::addColumn([
            'name' => 'subtitle',
        ]);
        CRUD::addColumn([
            'name' => 'range_borrow',
        ]);
        CRUD::addColumn([
            'name' => 'interest_rate',
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PackageRequest::class);

        CRUD::addField([
            'name' => 'image',
            'type' => 'browse'
        ]);
        CRUD::addField([
            'name' => 'new',
            'type' => 'checkbox'
        ]);
        CRUD::addField([
            'name' => 'title',
        ]);
        CRUD::addField([
            'name' => 'subtitle',
        ]);
        CRUD::addField([
            'name' => 'range_borrow',
            'type' => 'number'
        ]);
        CRUD::addField([
            'name' => 'interest_rate',
            'type' => 'number'
        ]);
        CRUD::addField([
            'name' => 'description',
            'type' => 'wysiwyg'
        ]);
        CRUD::addField([
            'name' => 'post_id',
            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'post',

            // optional - manually specify the related model and attribute
            'model'     => Post::class, // related model
            'attribute' => 'title', // foreign key attribute that is shown to user
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
