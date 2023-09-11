<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>

                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            @if(auth()->user()->hasRole('Admin'))
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Category
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                                <a class="nav-link" href="{{ route('category.create') }}">Create</a>
                                                <a class="nav-link" href="{{ route('category.index') }}">List</a>


                                        </nav>
                                    </div>


                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#sub-category" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Sub category
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="sub-category" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                                <a class="nav-link" href="{{ route('sub-category.create') }}">Create</a>
                                                <a class="nav-link" href="{{ route('sub-category.index') }}">List</a>


                                        </nav>
                                    </div>


                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#tag" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Tag
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="tag" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                                <a class="nav-link" href="{{ route('tag.create') }}">Create</a>
                                                <a class="nav-link" href="{{ route('tag.index') }}">List</a>


                                        </nav>
                                    </div>

                                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#post" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Post
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="post" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                                <a class="nav-link" href="{{ route('post.create') }}">Create</a>
                                                <a class="nav-link" href="{{ route('post.index') }}">List</a>


                                        </nav>
                                    </div>


                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#manage_role" aria-expanded="false" aria-controls="collapsePages">
                                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                                User Role
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="manage_role" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                                        <a class="nav-link" href="{{ route('user_role.index') }}">Manage role</a>



                                                </nav>
                                            </div>

                            @elseif(auth()->user()->hasRole('Editor'))
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#post" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Post
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="post" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                                <a class="nav-link" href="{{ route('post.create') }}">Create</a>
                                                <a class="nav-link" href="{{ route('post.index') }}">List</a>


                                        </nav>
                                    </div>
                            @elseif(auth()->user()->hasRole('Observer'))
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#post" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Post
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="post" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                                <a class="nav-link" href="{{ route('post.create') }}">Create</a>
                                                <a class="nav-link" href="{{ route('post.index') }}">List</a>


                                        </nav>
                                    </div>
                            @else
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#post" aria-expanded="false" aria-controls="collapsePages">
                                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                                Post
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="post" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                                        <a class="nav-link" href="{{ route('post.create') }}">Create</a>
                                                        <a class="nav-link" href="{{ route('post.index') }}">List</a>


                                                </nav>
                                            </div>

                            @endif
                            <div class="sb-sidenav-menu-heading">Addons</div>

                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        User
                    </div>
                </nav>
            </div>
