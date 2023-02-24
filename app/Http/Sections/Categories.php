<?php

namespace App\Http\Sections;

use AdminForm;
use AdminColumn;
use AdminDisplay;
use AdminFormElement;
use AdminColumnFilter;
use App\Models\Product;
use SleepingOwl\Admin\Section;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;

/**
 * Class Categories
 *
 * @property \App\Models\Category $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Categories extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Категории';

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
            AdminColumn::text('id', '#')->setWidth('50px')->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('title', 'Заголовок')->setWidth('50px')->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('description', 'Описание')->setWidth('50px')->setHtmlAttribute('class', 'text-center'),
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
                ->setModelForOptions(\App\Models\Category::class, 'name')
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
                AdminFormElement::text('slug','URL-адрес (НЕ МЕНЯТЬ)'),
                AdminFormElement::text('description', 'Описание'),
                AdminFormElement::html('Элементы страницы'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::text('title', 'Заголовок'),
                AdminFormElement::wysiwyg('content', 'Текст'),
                AdminFormElement::number('price', 'Цена'),
                AdminFormElement::image('preview_image', 'Превью (отображение в каталоге)'),
                AdminFormElement::image('main_image', 'Основное изображение'),
                AdminFormElement::text('alt_main_image','Описание основного изображения (alt)'),
                AdminFormElement::text('alt_main_image','Заголовок основного изображения (title)'),
                AdminFormElement::hasMany('images', [
                    AdminFormElement::image('image','Изображение слайдера'),
                    AdminFormElement::text('alt','Описание картинки'),
                    AdminFormElement::text('title','Заголовок картинки'),
                ]),
                AdminFormElement::textarea('short_desc','Краткое описание'),
                AdminFormElement::multiselect('products', 'Вложенные продукты', \App\Models\Product::class)->setDisplay('title'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('Варианты использования (модификации)'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::hasMany('options', [
                    AdminFormElement::text('h3','Заголовок'),
                    AdminFormElement::textarea('content','Текст'),
                    AdminFormElement::image('image','Изображение'),
                ]),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('Характеристики товара'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::hasMany('haracteristics', [
                    AdminFormElement::text('parameter','Параметр'),
                    AdminFormElement::text('value','Значение'),
                ]),
                AdminFormElement::html('<hr>'),
                AdminFormElement::file('video','Видеозапись'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('Изображения для портфолио'),
                AdminFormElement::hasMany('portfolio', [
                    AdminFormElement::image('image','Изображение для портфолио'),
                ]),
            ], 'col-xs-12 col-sm-6 col-md-4 col-lg-12')
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
