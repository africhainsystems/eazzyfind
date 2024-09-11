<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid for-light" src="{{ asset('web/images/logo.png') }}" alt="Eazzyfind" width="150"><img class="img-fluid for-dark" src="{{ asset('web/images/logo.png') }}" alt="Eazzyfind" width="150"></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid" src="{{ asset('web/images/logo-icon.png') }}" alt="Eazzyfind" width="50"></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid" src="{{ asset('web/images/logo-icon.png') }}" alt="Eazzyfind" width="50"></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div>
                      <h6>Pinned</h6>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="{{ route('admin.dashboard') }}">
                      <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#fill-home') }}"></use>
                      </svg><span class="lan-3">Dashboard</span></a>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-10">Listings</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="layers"></i></span>
                      <span class="lan-11">Categories</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-12" href="{{ route('admin.listing.category') }}">Category</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="align-justify"></i></span>
                      <span class="lan-14">Listings</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-15" href="{{ route('admin.listings') }}">All Listings</a></li>
                      <li><a class="lan-16" href="{{ route('admin.listings.add') }}">Add Listings</a></li>
                      <li><a class="lan-17" href="{{ route('admin.listings.pending') }}">Pending Listings</a></li>
                      <li><a class="lan-18" href="{{ route('admin.listings.inactive') }}">Inactive Listings</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="star"></i></span>
                      <span class="lan-19">Reviews</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-20" href="{{ route('admin.listings.reviews') }}">All Reviews</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.listings.messages') }}">
                      <span><i data-feather="message-circle"></i></span>
                      <span class="lan-21">Listing Messages</span></a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="users"></i></span>
                      <span>Providers</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-22" href="{{ route('admin.vendors') }}">All Providers</a></li>
                      <li><a class="lan-23" href="{{ route('admin.vendors.pending') }}">Pending Providers</a></li>
                      <li><a class="lan-24" href="{{ route('admin.vendors.active') }}">Active Providers</a></li>
                      <li><a class="lan-25" href="{{ url('admin/vendors/cancelled') }}">Cancelled Providers</a></li>
                      <li><a class="lan-25" href="{{ route('admin.identityform') }}">Identity Type</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>CONTENT</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="book-open"></i></span>
                      <span>Pages</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="{{ route('admin.pages') }}">All Pages</a></li>
                      <li><a class="lan-" href="#">Add Pages</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-blog') }}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#fill-blog') }}"></use>
                      </svg>
                      <span>Blog</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">All Articles</a></li>
                      <li><a class="lan-" href="#">Add Articles</a></li>
                      <li><a class="lan-" href="#">Categories</a></li>
                      <li><a class="lan-" href="#">Blog Comments</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="navigation"></i></span>
                      <span>Location</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">Countries</a></li>
                      <li><a class="lan-" href="#">Cities</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>MEMBERSHIP</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="file-plus"></i></span>
                      <span>Membership</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-22" href="#">Subscriptions</a></li>
                      <li><a class="lan-23" href="#">Transactions</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>REPORTS</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="shopping-bag"></i></span>
                      <span>Revenue</span>
                    </a>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>USER MANAGEMENT</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="users"></i></span>
                      <span>Manage Users</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-22" href="#">Admins</a></li>
                      <li><a class="lan-23" href="#">Users</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="lock"></i></span>
                      <span>Roles & Permissions</span>
                    </a>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>MANAGEMENT</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="message-circle"></i></span>
                      <span>Contact Messages</span>
                    </a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="message-square"></i></span>
                      <span>Email Templates</span>
                    </a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="alert-octagon"></i></span>
                      <span>Abuse Report</span>
                    </a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="bell"></i></span>
                      <span>Push Notifications</span>
                    </a>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>SETTINGS</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="settings"></i></span>
                      <span>General Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">General Settings</a></li>
                      <li><a class="lan-" href="#">Localization</a></li>
                      <li><a class="lan-" href="#">Profile</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="globe"></i></span>
                      <span>Website Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">SEO Settings</a></li>
                      <li><a class="lan-" href="#">Footer Settings</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="settings"></i></span>
                      <span>System Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">System Settings</a></li>
                      <li><a class="lan-" href="#">Email Settings</a></li>
                      <li><a class="lan-" href="#">SMS Settings</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="credit-card"></i></span>
                      <span>Financial Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">Payment Settings</a></li>
                      <li><a class="lan-" href="#">Currency Settings</a></li>
                      <li><a class="lan-" href="#">Tax Settings</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="briefcase"></i></span>
                      <span>Service Settings</span>
                    </a>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>MISCELLANEOUS</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-faq') }}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#fill-faq') }}"></use>
                      </svg><span>FAQ</span></a>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-knowledgebase') }}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#fill-knowledgebase') }}"></use>
                      </svg><span>Knowledgebase</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-support-tickets') }}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#fill-support-tickets') }}"></use>
                      </svg><span>Support Ticket</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
