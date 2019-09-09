<div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            DR
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            {{ Auth::user()->name }}
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="/">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="/product">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Produtos</p>
            </a>
          </li>
          <li>
            <a href="/provider">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Fornecedores</p>
            </a>
          </li>
          <li>
            <a href="/storage">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Estoques</p>
            </a>
          </li>
          <li>
            <a href="/sale">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Vender</p>
            </a>
          </li>
          <li>
            <a href="/reports">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Relatórios</p>
            </a>
          </li>
          <li>
            <a href="/blank">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Blank Page</p>
            </a>
          </li>
          {{-- <li>
            <a href="./icons.html">
              <i class="tim-icons icon-atom"></i>
              <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="tim-icons icon-pin"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="tim-icons icon-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="tim-icons icon-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="tim-icons icon-align-center"></i>
              <p>Typography</p>
            </a>
          </li>
          <li>
            <a href="./rtl.html">
              <i class="tim-icons icon-world"></i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="tim-icons icon-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
