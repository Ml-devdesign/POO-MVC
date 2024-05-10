<!-- Nav tabs -->
<ul class="nav nav-tabs" id="navId">
     </li>
     <li class="nav-item">
        <a href="/?controller=" class="nav-link">index</a>
    </li>
    <li class="nav-item">
        <a href="#tab1Id" class="nav-link active">Active</a>
    </li>

    <li class="nav-item">
        <a href="/?controller=artist" class="nav-link">Artist</a>
    </li>
     <li class="nav-item">
        <a href="/?controller=album" class="nav-link">Album</a>
    </li>
   
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>

<script>
    $('#navId a').click(e => {
        e.preventDefault();
        $(this).tab('show');
    });
</script>