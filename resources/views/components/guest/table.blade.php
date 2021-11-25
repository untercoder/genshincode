<style>
    .table_panel {
        padding-top: 2%;
        padding-left: 1%;
        padding-right: 1%;
    }
    .table_panel_container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
</style>

<section class="table_panel">
    <div class="table_panel_container">
        <table class="table">
            @include('components.guest.table_with_prcode')
        </table>
    </div>
</section>


