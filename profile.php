<?php
include "template/head.php";
include "template/nav.php";

if (isset($_SESSION['user']) && $_SESSION['user']->name_role == "user") {
    $welcomeBack = "Welcome back, " . $_SESSION['user']->fn_user;
    $idUser = $_SESSION['user']->id_user;
    $nameUser = $_SESSION['user']->fn_user;
    $lastNameUser = $_SESSION['user']->ln_user;
    $phoneNumberUser = $_SESSION['user']->phone_user;
    $addressUser = $_SESSION['user']->address_user;
    $cityIDUser = $_SESSION['user']->id_city;


    $pastOrders = getAllOrders($idUser, "completed");
    $cityArr = getAnyTable("city");
    $profileImageArr = getProfileProductImage("profile", $idUser);
    $imageNameUser = $profileImageArr->name_image;
    $imagePathUser = $profileImageArr->path_image;

    // print("<pre>" . print_r($_SESSION['user'], true) . "</pre>");
    // print("<pre>" . print_r($pastOrders, true) . "</pre>");
    // print("<pre>" . print_r($profileImageArr, true) . "</pre>");
?>
    <div class="container" id="profilePanel-div">
        <h1><?php echo $welcomeBack; ?>!</h1>

        <div class="row mt-5">
            <!-- Profile details -->
            <div class="col-lg-4 col-md-12">
                <h3 class="mb-3">Profile: </h3>

                <form id="updateProfileForm" enctype="multipart/form-data" class="d-flex flex-column align-items-center border-10">
                    <!-- PROFILE IMAGE -->
                    <div class="form-group col-10 my-4">
                        <div id="profile-image" class="d-flex justify-content-center">
                            <?php if ($imageNameUser != null) : ?>
                                <img class="border border-5" src="<?= $imagePathUser ?>" alt="<?= $imageNameUser ?>" />
                            <?php else : ?>
                                <img class="border border-5" src="assets/images/user-solid.svg" alt="user-solid.svg" />
                            <?php endif; ?>
                        </div>
                        <input type="file" name="imageUpdateBtn" id="imageUpdateBtn" class="my-3 form-control w-100" />
                        <span id="errorProfilePicture" class="mb-0 text-danger"></span>
                    </div>
                    <!-- FIRST NAME -->
                    <div class="form-group col-10 mb-3">
                        <label class="mb-1" for="inputFName">First Name</label>
                        <input class="form-control p-2" type="text" name="inputFName" id="inputFName" value="<?= $nameUser ?>" />
                        <span id="errorFName" class="mb-0 text-danger"></span>
                    </div>
                    <!-- LAST NAME -->
                    <div class="form-group col-10 mb-3">
                        <label class="mb-1" for="inputLName">Last Name</label>
                        <input class="form-control p-2" type="text" name="inputLName" id="inputLName" value="<?= $lastNameUser ?>" />
                        <span id="errorLName" class="mb-0 text-danger"></span>
                    </div>
                    <!-- PHONE NUMBER -->
                    <div class="form-group col-10 mb-3">
                        <label class="mb-1" for="inputPhone">Phone number</label>
                        <input class="form-control p-2" type="text" name="inputPhone" id="inputPhone" value="<?= $phoneNumberUser ?>" />
                        <span id="errorPhone" class="mb-0 text-danger"></span>
                    </div>
                    <!-- CITY -->
                    <div class="form-group col-10 mb-3">
                        <label class="mb-1" for="selectCity">City</label>
                        <select class="form-control p-2" name="selectCity" id="selectCity">
                            <option value="0">Select</option>
                            <!-- GET FROM DATABASE -->
                            <?php foreach ($cityArr as $city) : ?>
                                <?php if ($city->id_city == $cityIDUser) : ?>
                                    <option value="<?= $city->id_city ?>" selected><?= $city->name_city ?></option>
                                <?php else : ?>
                                    <option value="<?= $city->id_city ?>"><?= $city->name_city ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <span id="errorCity" class="mb-0 text-danger"></span>
                    </div>
                    <!-- ADDRESS -->
                    <div class="form-group col-10 mb-4">
                        <label class="mb-1" for="inputAddress">Address</label>
                        <input class="form-control p-2" type="text" name="inputAddress" id="inputAddress" value="<?= $addressUser ?>" />
                        <span id="errorAddress" class="mb-0 text-danger"></span>
                    </div>
                    <!-- UPDATE PROFILE BUTTON -->
                    <div class="form-group col-10 mt-4">
                        <input class="btn w-100 border-10" type="button" value="Update" name="updateProfileBtn" id="updateProfileBtn" />
                    </div>

                    <p id="response-text" class="col-10 mt-3 text-center fs-5 border-10"></p>
                </form>

            </div>

            <!-- Past orders -->
            <div class="col-lg-8 col-md-12">
                <h3 class="mb-3">Your past orders: </h3>

                <div id="past-order-div" class="border-10 p-3">
                    <div id="past-order-div-details">
                        <?php if (count($pastOrders) == 0) : ?>
                            <h3>You don't have any orders! </h3>
                        <?php else : ?>
                            <?php foreach ($pastOrders as $oID => $order) : ?>

                                <?php foreach ($order['items'] as $item) : ?>
                                    <div class="d-flex mb-2">
                                        <img class="border-10" height="100" src="<?= $item['path_image'] ?>" alt="<?= $item['name_product'] ?>" />
                                        <div class="d-flex justify-content-between flex-grow-1 flex-row mt-sm-0 mt-3">
                                            <div class="ms-3 w-25 past-order-item">
                                                <h6>Name</h6>
                                                <p class="me-auto"><?= $item['name_product']; ?></p>
                                            </div>
                                            <div id="quantity-container" class="past-order-item">
                                                <h6>Quantity</h6>
                                                <p class="me-auto"><?= $item['quantity_o_item']; ?></p>
                                            </div>
                                            <div id="price-container" class="past-order-item">
                                                <h6>Price</h6>
                                                <p class="me-auto">&dollar;<?= $item['price_product']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <div id="past-order-total" class="d-flex justify-content-between my-4 p-2 border-10">
                                    <h5 class="m-0">Order date: <?php echo substr($order['order_date'], 0, 10) ?></h5>
                                    <h5 class="m-0">Total: &dollar;<?= $order['total_price_customer'] ?> + shipping.</h5>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
} else {
    header("Location: 404.php");
}
?>

<?php
include "template/footer.php";
?>