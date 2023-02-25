<nav class="shadow" >
                <div class="d-flex justify-content-end">
                    <div class="dropdown">
                        <a class="text-decoration-none text-black fw-bold dropdown-toggle" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="public/images/avatars/1.jpg"
                                class="rounded-circle me-2" height="30" alt=""
                                loading="lazy" /><?php echo $_SESSION['username']; ?></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a href="<?php echo BASE_URL;?>logoutAdmin"
                                    class="text-decoration-none text-black fw-bold ps-2">logout</a></li>

                        </ul>
                    </div>
                </div>
            </nav>