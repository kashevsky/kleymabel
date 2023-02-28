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
            AdminColumn::text('id', '#'),
            AdminColumn::text('title', 'Заголовок'),
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
                // AdminFormElement::multiselect('sub_products_ids', 'Выбор вложенных продуктов')
                // ->setModelForOptions(\App\Models\Product::class)->setDisplay('title'),
                AdminFormElement::multiselect('subProducts', 'Вложенные продукты', \App\Models\Product::class)->setDisplay('title'),

                AdminFormElement::html('<hr>'),
                AdminFormElement::html('Элементы страницы'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('<img src="/images/zagolovok.png" style="width:400px">'),
                AdminFormElement::html('<br>'),
                AdminFormElement::text('title', 'Заголовок'),
                AdminFormElement::html('<img src="/images/kratk.png" style="width:400px">'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::textarea('short_desc','Краткое описание'),
                AdminFormElement::html('<img src="/images/text.png" style="width:400px">'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::wysiwyg('content', 'Текст'),
                AdminFormElement::number('price', 'Цена'),
                AdminFormElement::html('<img src="/images/pre.png" style="width:400px">'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::image('preview_image', 'Отображение в каталоге (превью)'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<img src="/images/osn.png" style="width:400px">'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::image('main_image', 'Основное изображение'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<img src="/images/slid.png" style="width:400px">'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('Изображения слайдера'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::hasMany('images', [
                    AdminFormElement::html('<br>'),
                    AdminFormElement::html('<br>'),
                    AdminFormElement::image('image','Изображение слайдера'),
                    AdminFormElement::html('<br>'),
                    AdminFormElement::html('<br>'),
                    AdminFormElement::text('alt','Описание картинки'),
                    AdminFormElement::text('title','Заголовок картинки'),
                ]),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<img src="/images/eto_kleymo.png" style="width:400px">'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::checkbox('is_stamp','Это клеймо?'),
                AdminFormElement::html('Характеристики товара'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::hasMany('haracteristics', [
                    AdminFormElement::html('<br>'),
                    AdminFormElement::html('<img src="/images/prm.png" style="width:400px">'),
                    AdminFormElement::html('<br>'),
                    AdminFormElement::text('parameter','Параметр'),
                    AdminFormElement::html('<br>'),
                    AdminFormElement::html('<img src="/images/zn.png" style="width:400px">'),
                    AdminFormElement::html('<br>'),
                    AdminFormElement::text('value','Значение'),
                    AdminFormElement::html('<br>'),
                ]),

                AdminFormElement::html('<hr>'),
                AdminFormElement::html('Расположение в каталоге'),
                AdminFormElement::select('category_id', 'Выбор категории')->setModelForOptions(\App\Models\Category::class),

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
