<? header('Content-Type: text/html; charset=utf-8'); ?>
<html>

<head>
    <title>Мой веб-сайт по CSS</title>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>

<body>
<p>CSS это акроним для Cascading Style Sheets/Каскадных таблиц стилей.</p>

<h1>Цвет переднего плана : свойство 'color'</h1>
<hr/>
<h2>При указании шрифтов для вашего web-сайта вы, естественно, начинаете с предпочтительного шрифта, а затем
    перечисляете альтернативные. Рекомендуем в конце списка указывать родовое имя. </h2>
<hr/>
<h3>Форматирование и установка стиля текста</h3>
<hr/>
<h4 id="link1">Урок 6: Ссылки</h4>

<p>Псевдокласс :link используется для ссылок на страницы, которые пользователь ещё не посещал.</p>

<p>Псевдокласс :visited используется для ссылок на страницы, которые пользователь посетил.</p>

<p>Псевдокласс :active используется для активных ссылок.</p>

<p>Псевдокласс :hover используется для ссылок, над которыми находится указатель мыши.</p>
<a href="#link1">Эта дивная ссылка в никуда растопырится если вы наведете на нее указатель мышки</a>
<hr/>
<h4 id="link7">Урок 7: Идентификация и группирование элементов (class и id)</h4>

<p>Виноград для белого вина:</p>
<ul>
    <li><a href="#link1" class="whitewine">Рислинг</a></li>
    <li><a href="#link1" class="whitewine">Шардонэ</a></li>
    <li><a href="#link1" class="whitewine">Пино Блан</a></li>
</ul>

<p>Виноград для красного вина:</p>
<ul>
    <li><a href="#link1" class="redwine">Кабернэ Совиньон</a></li>
    <li><a href="#link1" class="redwine">Мерло</a></li>
    <li><a href="#link1" class="redwine">Пино Нуар</a></li>
</ul>
<hr/>
<h4 id="c4">Идентификация элемента с помощью id</h4>

<p>Особенность <span class="benefit">id</span> в том, что в документе <span class="benefit">не может быть</span> более
    одного элемента с данным конкретным id. Каждый id должен
    быть уникальным. В других <span class="benefit">случая</span>х используйте атрибут class. </p>

<h4 id="link8">Урок 8: Группирование элементов (span и div)</h4>
<hr/>
<h4 id="link9">Урок 9: Боксовая модель</h4>
<hr/>
<h4 id="link11">Урок 11: Рамки</h4>

<div id="border1">

    <p>Существуют различные типы рамок. Ниже показаны восемь типов рамки и их интерпретация в Internet Explorer 5.5.
        Все примеры показаны цветом "gold" и толщиной "thick", но могут, естественно, выводиться другим цветом и
        толщиной.
        <br/>
        Значения none или hidden могут использоваться, если вы не хотите отображать рамку.</p>
</div>
<img src="figure014.gif" alt="Different types of borders">

<hr/>
<h4 id="link13">Урок 13: Всплывающие элементы (поплавки)</h4>

<div id="picture">
    <img src="bill.jpg" alt="Bill Gates">
</div>

<p>Iste quidem veteres inter ponetur honeste, qui vel mense brevi vel toto est iunior anno. Utor permisso, caudaeque
    pilos ut equinae paulatim vello unum, demo etiam unum, dum cadat elusus ratione ruentis acervi, qui redit in fastos
    et annis miraturque. </p>

<p>Ennius et sapines et fortis et alter Homerus, ut critici dicunt, leviter curare videtur, quo promissa cadant et
    somnia Pythagorea.Naevius in manibus non est et mentibus haeret paene recens? Adeo sanctum est vetus omne poema.
    Ambigitur quotiens, sit prior, Pacuvius docti. </p>

<p>Hos ediscit et hos arto stipata theatro spectat Roma potens; habet hos numeratque poetas ad nostrum tempus Livi
    scriptoris ab aevo, si nimis antique, si dure. </p>

<p>Interdum volgus rectum videt, est ubi peccat. Si veteres ita miratur laudatque poetas, ut nihil anteferat, nihil
    illis comparet, errat. Si quaedam nimis antique, si peraque dure dicere credit eos, ignave multa fatetur, et sapit
    et mecum facit et Iova iudicat aequo.Non equidem insector delendave carmina Livi esse reor, memini quae plagosum
    mihi parvo Orbilium dictare; sed emendata videri pulchraque et exactis minimum distantia miror.</p>

<p>Inter quae verbum emicuit si forte decorum, et si versus paulo concinnior unus et alter, venditque poema.</p>

<hr/>
<h4 id="link14">Урок 14: Позиционирование элементов</h4>
<hr/>
<h4 id="link14">Урок 15: Наслоение с помощью z-index (Слои)</h4>
<a href="royal.html">Пример из пяти слоев</a>

<p><br/></p>

</body>

</html>
