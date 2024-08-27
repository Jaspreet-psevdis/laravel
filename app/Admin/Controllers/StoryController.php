<?php

namespace App\Admin\Controllers;

use \App\Models\Story;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class StoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Story';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Story());

        $grid->column('id', __('Id'));
        // $grid->column('desktop_image', __('Desktop image'));
        // $grid->column('alt_text_desktop_image', __('Alt text desktop image'));
        // $grid->column('alt_text_mobile_image', __('Alt text mobile image'));
        $grid->column('heading', __('Heading'));
        $grid->column('mobile_image', __('Mobile image'));
        // $grid->column('sub_heading', __('Sub heading'));
        // $grid->column('link', __('Link'));
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
        $show = new Show(Story::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('desktop_image', __('Desktop image'));
        $show->field('alt_text_desktop_image', __('Alt text desktop image'));
        $show->field('mobile_image', __('Mobile image'));
        $show->field('alt_text_mobile_image', __('Alt text mobile image'));
        $show->field('heading', __('Heading'));
        $show->field('sub_heading', __('Sub heading'));
        $show->field('link', __('Link'));
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
        $form = new Form(new Story());

        $form->textarea('desktop_image', __('Desktop image'));
        $form->textarea('alt_text_desktop_image', __('Alt text desktop image'));
        $form->textarea('mobile_image', __('Mobile image'));
        $form->textarea('alt_text_mobile_image', __('Alt text mobile image'));
        $form->textarea('heading', __('Heading'));
        $form->textarea('sub_heading', __('Sub heading'));
        $form->textarea('link', __('Link'));

        return $form;
    }
}
