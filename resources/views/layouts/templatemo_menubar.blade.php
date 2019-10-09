    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="{{route('index')}}">Основная страница</a></li>
                <li><a href="{{route('products')}}">Запчасти</a>
                    <ul>
                        <li><a href="#submenu1">Газогорелочные</a></li>
                        <li><a href="#submenu2">Навесные котлы</a></li>
                        <li><a href="#submenu3">Напольные котлы</a></li>
                        <li><a href="#submenu4">Газовые котлы</a></li>
                        
                  </ul>
                </li>
                
                <li><a href="{{route('faqs')}}">FAQs</a></li>
                <li><a href="{{route('checkout')}}">Корзина</a></li>
                <li><a href="{{route('contact')}}">О нас</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar -->
