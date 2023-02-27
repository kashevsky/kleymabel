<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminColumnFilter;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Section;

/**
 * Class Products
 *
 * @property \App\Models\Product $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Products extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Товары';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa fa-lightbulb-o');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $columns = [
            AdminColumn::text('title', 'Заголовок'),
            AdminColumn::text('description', 'Описание'),
        ];

        $display = AdminDisplay::datatables()
            ->setName('firstdatatables')
            ->setOrder([[0, 'asc']])
            ->setDisplaySearch(true)
            ->paginate(25)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover th-center')
        ;

        $display->setColumnFilters([
            AdminColumnFilter::select()
                ->setModelForOptions(\App\Models\Product::class, 'name')
                ->setLoadOptionsQueryPreparer(function($element, $query) {
                    return $query;
                })
                ->setDisplay('name')
                ->setColumnName('name')
                ->setPlaceholder('All names')
            ,
        ]);
        $display->getColumnFilters()->setPlacement('card.heading');

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     *
     * @return FormInterface
     */
    public function onEdit($id = null, $payload = [])
    {
        $form = AdminForm::card()->addBody([
            AdminFormElement::columns()->addColumn([
                AdminFormElement::html('Данные для СЕО'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::text('meta_title', 'Title'),
                AdminFormElement::text('slug', 'URL-адрес(НЕ МЕНЯТЬ)'),
                AdminFormElement::text('description', 'Описание'),
                AdminFormElement::html('Расположение в каталоге'),
                AdminFormElement::select('category_id', 'Выбор категории')->setModelForOptions(\App\Models\Category::class),
                // AdminFormElement::multiselect('sub_products_ids', 'Выбор вложенных продуктов')
                // ->setModelForOptions(\App\Models\Product::class)->setDisplay('title'),
                AdminFormElement::multiselect('subProducts', 'Вложенные продукты', \App\Models\Product::class)->setDisplay('title'),

                AdminFormElement::html('<hr>'),
                AdminFormElement::html('Элементы страницы'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::text('title', 'Заголовок'),
                AdminFormElement::wysiwyg('content', 'Текст'),
                AdminFormElement::number('price', 'Цена'),
                AdminFormElement::image('preview_image', 'Отображение в каталоге (превью)'),
                AdminFormElement::image('main_image', 'Заглавное изображение'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::checkbox('is_stamp','Это клеймо?'),
                AdminFormElement::html('Характеристики товара'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::hasMany('haracteristics', [
                    AdminFormElement::text('parameter','Параметр'),
                    AdminFormElement::text('value','Значение'),
                ]),
                AdminFormElement::html('Изображения слайдера'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::hasMany('images', [
                    AdminFormElement::image('image','Изображение слайдера'),
                    AdminFormElement::text('alt','Описание картинки'),
                    AdminFormElement::text('title','Заголовок картинки'),
                ]),

            ],'col-xs-12 col-sm-6 col-md-8 col-lg-12'),
        ]);

        $form->getButtons()->setButtons([
            'save'  => new Save(),
            'save_and_close'  => new SaveAndClose(),
            'save_and_create'  => new SaveAndCreate(),
            'cancel'  => (new Cancel()),
        ]);

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate($payload = [])
    {
        return $this->onEdit(null, $payload);
    }

    /**
     * @return bool
     */
    public function isDeletable(Model $model)
    {
        return true;
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
