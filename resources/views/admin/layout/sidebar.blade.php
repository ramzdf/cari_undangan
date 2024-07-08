<div class="left-sidebar">
    <div class="slimscroll-menu">
        <div class="list-group list-group-transparent mb-0">

            <span class="list-group-item disabled">
                Getting Started
            </span>

            <a href="/admin/invitation"
                class="list-group-item list-group-item-action {{ request()->is('admin/invitation') ? ' active' : '' }}">
                <span class="mr-2">
                    <i class="fa-solid fa-id-card"></i>
                </span>Undangan
            </a>

            <a href="/admin/invitation/create"
                class="list-group-item list-group-item-action {{ request()->is('admin/invitation/create') ? ' active' : '' }}">
                <span class="mr-2">
                    <i class="fa-solid fa-plus"></i>
                </span>Tambah Undangan
            </a>

        </div>
    </div>
</div>
