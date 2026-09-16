<?php

/*
|--------------------------------------------------------------------------
| GatewayLinen Admin Sidebar
|--------------------------------------------------------------------------
| Common sidebar used by all admin pages.
|
| Before including this file, set:
|
| $activeMenu = 'dashboard';
| $activeMenu = 'products';
| $activeMenu = 'orders';
| etc.
|
|--------------------------------------------------------------------------
*/

if (!defined('GATEWAY_BASE')) {
    define('GATEWAY_BASE', '/GatewayLinenadmin');
}

$activeMenu = $activeMenu ?? '';

?>

<style>

/* =========================================================
   GATEWAYLINEN SIDEBAR - DARK THEME
========================================================= */

.sidebar {

    position: fixed;

    top: 0;
    left: 0;
    bottom: 0;

    width: 255px;

    z-index: 1000;

    display: flex;

    flex-direction: column;

    padding: 14px 11px;

    background:
        linear-gradient(
            180deg,
            #0a1119 0%,
            #0d1620 100%
        );

    border-right:
        1px solid #1e2d3d;

    color: #f0f4f8;

    overflow-y: auto;

    box-shadow:
        8px 0 30px rgba(0, 0, 0, 0.4);

    scrollbar-width: thin;

    scrollbar-color:
        rgba(255,255,255,.16)
        transparent;
}


/* =========================================================
   SCROLLBAR
========================================================= */

.sidebar::-webkit-scrollbar {

    width: 4px;
}

.sidebar::-webkit-scrollbar-track {

    background: transparent;
}

.sidebar::-webkit-scrollbar-thumb {

    background:
        rgba(255,255,255,.16);

    border-radius: 10px;
}

.sidebar::-webkit-scrollbar-thumb:hover {

    background:
        rgba(255,255,255,.28);
}


/* =========================================================
   BRAND
========================================================= */

.sidebar-brand {

    display: flex;

    align-items: center;

    gap: 10px;

    min-height: 48px;

    padding: 0 8px 13px;

    margin-bottom: 9px;

    border-bottom:
        1px solid
        #1e2d3d;
}


.sidebar-logo {

    width: 35px;

    height: 35px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    overflow: hidden;

    border-radius: 50%;

    background: #0a1119;

    border:
        2px solid #10b981;

    box-shadow:
        0 0 0 3px rgba(16, 185, 129, 0.12);
}


.sidebar-logo img {

    width: 100%;

    height: 100%;

    object-fit: contain;

    background: #ffffff;

    border-radius: 50%;
}


.sidebar-logo-fallback {

    display: none;

    width: 100%;

    height: 100%;

    align-items: center;

    justify-content: center;

    color: #10b981;

    background: #0d1620;

    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 0.5px;
}


.sidebar-brand-name {

    color: #f0f4f8;

    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 17px;

    font-weight: 700;

    letter-spacing: -.2px;

    white-space: nowrap;

    background:
        linear-gradient(
            90deg,
            #f0f4f8,
            #10b981
        );

    -webkit-background-clip: text;

    background-clip: text;

    -webkit-text-fill-color: transparent;
}


/* =========================================================
   MENU SECTION
========================================================= */

.sidebar-section {

    margin-bottom: 7px;
}


.sidebar-section-title {

    padding:
        10px 10px 6px;

    color:
        #5f7488;

    font-size: 8.5px;

    font-weight: 800;

    letter-spacing: 1.15px;

    text-transform: uppercase;
}


/* =========================================================
   MENU ITEM
========================================================= */

.sidebar-menu-item {

    position: relative;

    display: flex;

    align-items: center;

    width: 100%;

    min-height: 37px;

    gap: 10px;

    padding:
        8px 10px;

    margin-bottom: 2px;

    border-radius: 7px;

    color:
        #a8b8c8;

    text-decoration: none;

    font-size: 10.5px;

    font-weight: 600;

    transition:
        all .18s ease;
}


.sidebar-menu-item:hover {

    color: #f0f4f8;

    background:
        rgba(16, 185, 129, 0.08);

    transform:
        translateX(2px);
}


/* =========================================================
   ACTIVE
========================================================= */

.sidebar-menu-item.active {

    color: #ffffff;

    font-weight: 700;

    background:
        linear-gradient(
            90deg,
            #059669,
            #10b981
        );

    box-shadow:
        0 4px 13px
        rgba(16, 185, 129, 0.28);
}


.sidebar-menu-item.active:hover {

    transform: none;

    background:
        linear-gradient(
            90deg,
            #059669,
            #10b981
        );
}


/* Active indicator bar */

.sidebar-menu-item.active::before {

    content: "";

    position: absolute;

    left: -11px;

    top: 50%;

    transform: translateY(-50%);

    width: 3px;

    height: 20px;

    border-radius: 0 3px 3px 0;

    background: #10b981;

    box-shadow: 0 0 12px rgba(16, 185, 129, 0.6);
}


/* =========================================================
   ICON
========================================================= */

.sidebar-icon {

    width: 19px;

    height: 19px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    color:
        #5f7488;

    transition: color .18s ease;
}


.sidebar-icon svg {

    width: 15px;

    height: 15px;

    fill: none;

    stroke:
        currentColor;

    stroke-width: 1.7;

    stroke-linecap: round;

    stroke-linejoin: round;
}


.sidebar-menu-item:hover
.sidebar-icon {

    color: #10b981;
}


.sidebar-menu-item.active
.sidebar-icon {

    color: #ffffff;
}


/* =========================================================
   TEXT
========================================================= */

.sidebar-text {

    flex: 1;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;
}


/* =========================================================
   BADGE
========================================================= */

.sidebar-badge {

    min-width: 18px;

    height: 17px;

    padding: 0 5px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    border-radius: 20px;

    background:
        rgba(16, 185, 129, 0.15);

    color:
        #10b981;

    font-size: 8px;

    font-weight: 700;
}


.sidebar-menu-item.active
.sidebar-badge {

    background:
        rgba(255,255,255,.2);

    color: #ffffff;
}


/* =========================================================
   BOTTOM
========================================================= */

.sidebar-bottom {

    margin-top: auto;

    padding-top: 10px;

    border-top:
        1px solid
        #1e2d3d;
}


/* =========================================================
   LOGOUT
========================================================= */

.sidebar-logout {

    color:
        #a8b8c8;
}


.sidebar-logout .sidebar-icon {

    color:
        #5f7488;
}


.sidebar-logout:hover {

    color:
        #fca5a5;

    background:
        rgba(239, 68, 68, 0.1);
}


.sidebar-logout:hover .sidebar-icon {

    color:
        #f87171;
}


/* =========================================================
   MOBILE OVERLAY
========================================================= */

.sidebar-overlay {

    display: none;

    position: fixed;

    inset: 0;

    z-index: 999;

    background:
        rgba(3, 12, 20, 0.7);

    backdrop-filter:
        blur(3px);

    -webkit-backdrop-filter:
        blur(3px);
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 900px) {

    .sidebar {

        left: -270px;

        width: 260px;

        transition:
            left .25s ease;
    }


    .sidebar.mobile-open {

        left: 0;

        box-shadow:
            8px 0 40px rgba(0, 0, 0, 0.6);
    }


    .sidebar-overlay.mobile-open {

        display: block;
    }

    .sidebar-menu-item.active::before {

        left: -11px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .sidebar {

        width: 250px;

        left: -260px;
    }


    .sidebar.mobile-open {

        left: 0;
    }

}


/* =========================================================
   PRINT
========================================================= */

@media print {

    .sidebar,
    .sidebar-overlay {

        display: none !important;
    }

}

</style>


<!-- =========================================================
     MOBILE OVERLAY
========================================================= -->

<div
    class="sidebar-overlay"
    id="sidebarOverlay"
    onclick="closeMobileSidebar()"
></div>


<!-- =========================================================
     SIDEBAR
========================================================= -->

<aside
    class="sidebar"
    id="adminSidebar"
>


    <!-- =====================================================
         BRAND
    ====================================================== -->

    <div class="sidebar-brand">

        <div class="sidebar-logo">

            <img
                src="<?= GATEWAY_BASE ?>/uploads/logo/logo.png"
                alt="GatewayLinen"
                onerror="
                    this.style.display='none';
                    this.nextElementSibling.style.display='flex';
                "
            >

            <div class="sidebar-logo-fallback">
                GL
            </div>

        </div>


        <div class="sidebar-brand-name">

            GatewayLinen

        </div>

    </div>



    <!-- =====================================================
         MAIN
    ====================================================== -->

    <div class="sidebar-section">

        <div class="sidebar-section-title">
            Main
        </div>


        <!-- DASHBOARD -->

        <a
            href="<?= GATEWAY_BASE ?>/dashboard.php"
            class="sidebar-menu-item <?= $activeMenu === 'dashboard' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <rect
                        x="3"
                        y="3"
                        width="7"
                        height="7"
                        rx="1"
                    />

                    <rect
                        x="14"
                        y="3"
                        width="7"
                        height="7"
                        rx="1"
                    />

                    <rect
                        x="3"
                        y="14"
                        width="7"
                        height="7"
                        rx="1"
                    />

                    <rect
                        x="14"
                        y="14"
                        width="7"
                        height="7"
                        rx="1"
                    />

                </svg>

            </div>

            <span class="sidebar-text">
                Dashboard
            </span>

        </a>


        <!-- CATEGORIES -->

        <a
            href="<?= GATEWAY_BASE ?>/categories/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'categories' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M4 4h7v7H4z" />

                    <path d="M13 4h7v7h-7z" />

                    <path d="M4 13h7v7H4z" />

                    <path d="M13 13h7v7h-7z" />

                </svg>

            </div>

            <span class="sidebar-text">
                Categories
            </span>

        </a>


        <!-- PRODUCTS -->

        <a
            href="<?= GATEWAY_BASE ?>/products/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'products' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M3 8.5L12 3l9 5.5" />

                    <path d="M3 8.5V17l9 5 9-5V8.5" />

                    <path d="M12 22V12" />

                    <path d="M3.5 8.5L12 13l8.5-4.5" />

                </svg>

            </div>

            <span class="sidebar-text">
                Products
            </span>

        </a>


        <!-- INVENTORY -->

        <a
            href="<?= GATEWAY_BASE ?>/inventory/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'inventory' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M4 7h16" />

                    <path d="M6 7l1-3h10l1 3" />

                    <path d="M5 7v13h14V7" />

                    <path d="M9 11h6" />

                </svg>

            </div>

            <span class="sidebar-text">
                Inventory
            </span>

        </a>


        <!-- ORDERS -->

        <a
            href="<?= GATEWAY_BASE ?>/orders/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'orders' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <circle
                        cx="9"
                        cy="20"
                        r="1"
                    />

                    <circle
                        cx="18"
                        cy="20"
                        r="1"
                    />

                    <path
                        d="M3 4h2l2.2 11h10.9l2-8H6"
                    />

                </svg>

            </div>

            <span class="sidebar-text">
                Orders
            </span>

        </a>


        <!-- CUSTOMERS -->

        <a
            href="<?= GATEWAY_BASE ?>/customers/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'customers' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <circle
                        cx="9"
                        cy="8"
                        r="3"
                    />

                    <path
                        d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"
                    />

                    <circle
                        cx="18"
                        cy="9"
                        r="2"
                    />

                    <path
                        d="M16 15c2.8.5 4.5 2.3 4.5 5"
                    />

                </svg>

            </div>

            <span class="sidebar-text">
                Customers
            </span>

        </a>

    </div>



    <!-- =====================================================
         SALES & MARKETING
    ====================================================== -->

    <div class="sidebar-section">

        <div class="sidebar-section-title">
            Sales & Marketing
        </div>


        <!-- WHOLESALE -->

        <a
            href="<?= GATEWAY_BASE ?>/wholesale/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'wholesale' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M3 21V7l9-4 9 4v14" />

                    <path d="M3 10h18" />

                    <path d="M8 10v11" />

                    <path d="M16 10v11" />

                </svg>

            </div>

            <span class="sidebar-text">
                Wholesale
            </span>

        </a>


        <!-- QUOTES -->

        <a
            href="<?= GATEWAY_BASE ?>/quotes/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'quotes' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M6 3h12v18H6z" />

                    <path d="M9 7h6" />

                    <path d="M9 11h6" />

                    <path d="M9 15h4" />

                </svg>

            </div>

            <span class="sidebar-text">
                Quotes
            </span>

        </a>


        <!-- BULK INQUIRIES -->

        <a
            href="<?= GATEWAY_BASE ?>/bulk-inquiries/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'bulk-inquiries' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M4 5h16v12H4z" />

                    <path d="M8 21h8" />

                    <path d="M12 17v4" />

                    <path d="M8 9h8" />

                    <path d="M8 13h5" />

                </svg>

            </div>

            <span class="sidebar-text">
                Bulk Inquiries
            </span>

        </a>


        <!-- WISHLIST -->

        <a
            href="<?= GATEWAY_BASE ?>/wishlist/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'wishlist' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path
                        d="M20.8 8.8c0 5.5-8.8 10.2-8.8 10.2S3.2 14.3 3.2 8.8A5.1 5.1 0 018.3 4c1.6 0 3 .7 3.7 1.9C12.7 4.7 14.1 4 15.7 4a5.1 5.1 0 015.1 4.8z"
                    />

                </svg>

            </div>

            <span class="sidebar-text">
                Wishlist
            </span>

        </a>


        <!-- COUPONS -->

        <a
            href="<?= GATEWAY_BASE ?>/coupons/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'coupons' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path
                        d="M20 12a2 2 0 010-4V5a2 2 0 00-2-2H6a2 2 0 00-2 2v3a2 2 0 010 4v3a2 2 0 002 2h12a2 2 0 002-2v-3z"
                    />

                    <path d="M9 9h.01" />

                    <path d="M15 15h.01" />

                    <path d="M9 15l6-6" />

                </svg>

            </div>

            <span class="sidebar-text">
                Coupons
            </span>

        </a>


        <!-- REVIEWS -->

        <a
            href="<?= GATEWAY_BASE ?>/reviews/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'reviews' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path
                        d="M12 3l2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3 6.4 20.2l1.1-6.2L3 9.6l6.2-.9L12 3z"
                    />

                </svg>

            </div>

            <span class="sidebar-text">
                Reviews
            </span>

        </a>


        <!-- NEWSLETTER -->

        <a
            href="<?= GATEWAY_BASE ?>/newsletter/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'newsletter' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <rect
                        x="3"
                        y="5"
                        width="18"
                        height="14"
                        rx="2"
                    />

                    <path d="M3 7l9 6 9-6" />

                </svg>

            </div>

            <span class="sidebar-text">
                Newsletter
            </span>

        </a>


        <!-- BACK IN STOCK -->

        <a
            href="<?= GATEWAY_BASE ?>/back-in-stock/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'back-in-stock' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M4 4v6h6" />

                    <path d="M20 20v-6h-6" />

                    <path d="M20 9a8 8 0 00-14-5L4 10" />

                    <path d="M4 15a8 8 0 0014 5l2-6" />

                </svg>

            </div>

            <span class="sidebar-text">
                Back in Stock
            </span>

        </a>

    </div>



    <!-- =====================================================
         OPERATIONS
    ====================================================== -->

    <div class="sidebar-section">

        <div class="sidebar-section-title">
            Operations
        </div>


        <!-- WAREHOUSES -->

        <a
            href="<?= GATEWAY_BASE ?>/warehouses/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'warehouses' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M3 10l9-6 9 6" />

                    <path d="M5 9v11h14V9" />

                    <path d="M9 20v-6h6v6" />

                    <path d="M8 11h8" />

                </svg>

            </div>

            <span class="sidebar-text">
                Warehouses
            </span>

        </a>


        <!-- PRODUCT VARIANTS -->

        <a
            href="<?= GATEWAY_BASE ?>/variants/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'variants' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M4 4h7v7H4z" />

                    <path d="M13 4h7v7h-7z" />

                    <path d="M4 13h7v7H4z" />

                    <path d="M13 13h7v7h-7z" />

                </svg>

            </div>

            <span class="sidebar-text">
                Product Variants
            </span>

        </a>


        <!-- STOCK MOVEMENTS -->

        <a
            href="<?= GATEWAY_BASE ?>/inventory/stock-movements.php"
            class="sidebar-menu-item <?= $activeMenu === 'stock-movements' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M7 7h11l-3-3" />

                    <path d="M18 7l-3 3" />

                    <path d="M17 17H6l3 3" />

                    <path d="M6 17l3-3" />

                </svg>

            </div>

            <span class="sidebar-text">
                Stock Movements
            </span>

        </a>


        <!-- TAXES & SHIPPING -->

        <a
            href="<?= GATEWAY_BASE ?>/taxes-shipping/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'taxes-shipping' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M3 6h11v11H3z" />

                    <path d="M14 10h4l3 3v4h-7z" />

                    <circle
                        cx="7"
                        cy="19"
                        r="2"
                    />

                    <circle
                        cx="18"
                        cy="19"
                        r="2"
                    />

                </svg>

            </div>

            <span class="sidebar-text">
                Taxes & Shipping
            </span>

        </a>

    </div>



    <!-- =====================================================
         SYSTEM
    ====================================================== -->

    <div class="sidebar-section">

        <div class="sidebar-section-title">
            System
        </div>


        <!-- ROLES -->

        <a
            href="<?= GATEWAY_BASE ?>/roles-permissions/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'roles-permissions' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <circle
                        cx="12"
                        cy="8"
                        r="3"
                    />

                    <path
                        d="M5 21c0-4 3-7 7-7s7 3 7 7"
                    />

                    <path d="M19 5l2 2-2 2" />

                </svg>

            </div>

            <span class="sidebar-text">
                Roles & Permissions
            </span>

        </a>


        <!-- SETTINGS -->

        <a
            href="<?= GATEWAY_BASE ?>/settings/general.php"
            class="sidebar-menu-item <?= $activeMenu === 'settings' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <circle
                        cx="12"
                        cy="12"
                        r="3"
                    />

                    <path
                        d="M19 12a7 7 0 01-.2 1.7l2 1.5-2 3.4-2.3-1a8 8 0 01-3 1.7L13 21H9l-.5-1.7a8 8 0 01-3-1.7l-2.3 1-2-3.4 2-1.5A7 7 0 013 12c0-.6.1-1.2.2-1.7l-2-1.5 2-3.4 2.3 1a8 8 0 013-1.7L9 3h4l.5 1.7a8 8 0 013 1.7l2.3-1 2 3.4-2 1.5c.1.5.2 1.1.2 1.7z"
                    />

                </svg>

            </div>

            <span class="sidebar-text">
                System Settings
            </span>

        </a>


        <!-- AUDIT LOGS -->

        <a
            href="<?= GATEWAY_BASE ?>/audit-logs/index.php"
            class="sidebar-menu-item <?= $activeMenu === 'audit-logs' ? 'active' : '' ?>"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M4 4h16v16H4z" />

                    <path d="M8 8h8" />

                    <path d="M8 12h8" />

                    <path d="M8 16h5" />

                </svg>

            </div>

            <span class="sidebar-text">
                Audit Logs
            </span>

        </a>

    </div>



    <!-- =====================================================
         LOGOUT
    ====================================================== -->

    <div class="sidebar-bottom">

        <a
            href="<?= GATEWAY_BASE ?>/logout.php"
            class="sidebar-menu-item sidebar-logout"
        >

            <div class="sidebar-icon">

                <svg viewBox="0 0 24 24">

                    <path d="M10 17l5-5-5-5" />

                    <path d="M15 12H3" />

                    <path d="M21 3v18" />

                </svg>

            </div>

            <span class="sidebar-text">
                Logout
            </span>

        </a>

    </div>

</aside>