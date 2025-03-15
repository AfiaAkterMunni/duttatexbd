<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
@isset($seo)
    @if(!empty($seo->meta_description))
        <meta name="description" content="{{ $seo->meta_description }}"/>
    @endif
    @if(!empty($seo->meta_keywords))
        <meta name="keywords" content="{{ $seo->meta_keywords }}"/>
    @endif
    @if (!empty($seo->meta_robots))
        <meta name="robots" content="{{ $seo->meta_robots }}">
    @endif
@endisset
<link rel="profile" href="https://gmpg.org/xfn/11">
{{-- TODO: create your own index. I just copied from nrbfashion.com --}}
{{-- <meta name="yandex-verification" content="6d993c4241bdbef3" />
<meta name="msvalidate.01" content="15A832B60D26B0503268A251C2AFE01D" />
<meta name="msvalidate.01" content="A235C4575D8E0CF4C83A5717C1A56147" />
<meta name="google-site-verification" content="8EQwjGpsRQy8lz9q9VhD_Amnpde4i2enPqhp8QAeGy4" /> --}}


  <!-- cdn link for tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />


  <!-- cdn link for jquery -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- cdn link for font-awesome icon -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


  @if(request()->is('/subcategory'))
      <!-- subcategory -->
      <style>
    #accordian>ul.show-dropdown>li.active>a,
    #accordian>ul>li>ul.show-dropdown>li.active>a,
    #accordian>ul>li>ul>li>ul.show-dropdown>li.active>a,
    #accordian>ul>li>ul>li>ul>li>ul.show-dropdown>li.active>a,
    #accordian>ul>li>ul>li>ul>li>ul>li>ul.show-dropdown>li.active>a{
      background-color: #edf5fc;
        color: #0089ff;
        box-shadow: 0px 1px 2px rgba(0, 137, 255, 0.2);
    }

    #accordian a:not(:only-child):after {
      content: "\f105";
        position: absolute;
        right: 10px;
        top: 14px;
        font-size: 15px;
        font-family: "Font Awesome 5 Free";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        font-weight: 900;
        transition: 0.5s;
    }

    #accordian .active>a:not(:only-child):after {
        transform: rotate(90deg);
    }
  </style>
  @endif
