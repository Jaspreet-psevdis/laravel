<?php

namespace App\Admin\Controllers;

use \App\Models\Pages;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class PagesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Pages';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Pages());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        // $grid->column('meta_title', __('Meta title'));
        // $grid->column('meta_keywords', __('Meta keywords'));
        // $grid->column('meta_description', __('Meta description'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Pages::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('meta_title', __('Meta title'));
        $show->field('meta_keywords', __('Meta keywords'));
        $show->field('meta_description', __('Meta description'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Pages());

        $form->textarea('title', __('Title'));
        $form->textarea('meta_title', __('Meta title'));
        $form->textarea('meta_keywords', __('Meta keywords'));
        $form->text('meta_description', __('Meta description'));

        return $form;
    }
}
