<?php

namespace App\Admin\Controllers;

use App\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post);

        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('title', __('Title'));
        $grid->column('text', __('Text'));
        $grid->column('user_id', __('User id'));
        
        $grid->paginate(3);
        
        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('title', 'title');
            $filter->like('text', 'text');
            $filter->date('created_at', 'data');
        });

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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('title', __('Title'));        
        $show->field('text', __('Text'));
        $show->field('user_id', __('User id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post);

        $form->text('title', __('Title'));
        $form->file('multiple',__('photo'));
        $form->textarea('text', __('Text'));
        $form->number('user_id', __('User id'));

        return $form;
    }
}
