<?php

namespace App\Admin\Controllers;

use \App\Models\SideImage;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class SideImageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SideImage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SideImage());

        $grid->column('id', __('Id'));
        // $grid->column('desktop_image', __('Desktop image'));
        // $grid->column('alt_text_desktop_image', __('Alt text desktop image'));
        $grid->column('mobile_image', __('Mobile image'));
        // $grid->column('alt_text_mobile_image', __('Alt text mobile image'));
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
        $show = new Show(SideImage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('desktop_image', __('Desktop image'));
        $show->field('alt_text_desktop_image', __('Alt text desktop image'));
        $show->field('mobile_image', __('Mobile image'));
        $show->field('alt_text_mobile_image', __('Alt text mobile image'));
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
        $form = new Form(new SideImage());

        $form->textarea('desktop_image', __('Desktop image'));
        $form->textarea('alt_text_desktop_image', __('Alt text desktop image'));
        $form->textarea('mobile_image', __('Mobile image'));
        $form->textarea('alt_text_mobile_image', __('Alt text mobile image'));

        return $form;
    }
}
