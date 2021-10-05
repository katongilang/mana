 <!-- ========== Left Sidebar Start ========== -->
 <div class="leftside-menu">

 	<!-- LOGO -->
 	<a href="<?=base_url()?>" class="logo text-center logo-light">
 		<span class="logo-lg">
 			<img src="<?= base_url() ?>/assets/images/logo.png" alt="" height="16">
 		</span>
 		<span class="logo-sm">
 			<img src="<?= base_url() ?>/assets/images/logo_sm.png" alt="" height="16">
 		</span>
 	</a>

 	<!-- LOGO -->
 	<a href="<?=base_url()?>" class="logo text-center logo-dark">
 		<span class="logo-lg">
 			<img src="<?= base_url() ?>/assets/images/logo-dark.png" alt="" height="16">
 		</span>
 		<span class="logo-sm">
 			<img src="<?= base_url() ?>/assets/images/logo_sm_dark.png" alt="" height="16">
 		</span>
 	</a>

 	<div class="h-100" id="leftside-menu-container" data-simplebar>

 		<!--- Sidemenu -->
 		<ul class="side-nav">

 			<li class="side-nav-title side-nav-item">Navigation</li>

 			<li class="side-nav-item">
 				<a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
 					<i class="uil-home-alt"></i>
 					<span class="badge bg-success float-end">4</span>
 					<span> Dashboards </span>
 				</a>
 				<div class="collapse" id="sidebarDashboards">
 					<ul class="side-nav-second-level">
 						<li>
 							<a href="dashboard-analytics.html">Analytics</a>
 						</li>
 						<li>
 							<a href="dashboard-crm.html">CRM</a>
 						</li>
 						<li>
 							<a href="index.html">Ecommerce</a>
 						</li>
 						<li>
 							<a href="dashboard-projects.html">Projects</a>
 						</li>
 					</ul>
 				</div>
 			</li>

             <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#menu_sertifikat" aria-expanded="false" aria-controls="menu_sertifikat" class="side-nav-link">
                   <i class="mdi mdi-certificate-outline"></i>
                   <span> Sertifikat </span><span class="menu-arrow"></span>
               </a>
               <div class="collapse" id="menu_sertifikat">
                   <ul class="side-nav-second-level">
                      <li>
                         <a href="<?=base_url()?>/admin/sertifikat">Input Nomor</a>
                     </li>
                     <li>
                         <a href="<?=base_url()?>">Menu 2</a>
                     </li>
                 </ul>
             </div>
         </li>

         <li class="side-nav-title side-nav-item">Apps</li>

         <li class="side-nav-item">
           <a href="apps-chat.html" class="side-nav-link">
             <i class="uil-comments-alt"></i>
             <span> Chat </span>
         </a>
     </li>

     <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
          <i class="uil-briefcase"></i>
          <span> Projects </span>
          <span class="menu-arrow"></span>
      </a>
      <div class="collapse" id="sidebarProjects">
          <ul class="side-nav-second-level">
            <li>
              <a href="apps-projects-list.html">List</a>
          </li>
          <li>
              <a href="apps-projects-details.html">Details</a>
          </li>
          <li>
              <a href="apps-projects-gantt.html">Gantt <span class="badge rounded-pill badge-light-lighten font-10 float-end">New</span></a>
          </li>
          <li>
              <a href="apps-projects-add.html">Create Project <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
          </li>
      </ul>
  </div>
</li>

<li class="side-nav-title side-nav-item mt-1">Components</li>

<li class="side-nav-item">
 <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
   <i class="uil-folder-plus"></i>
   <span> Multi Level </span>
   <span class="menu-arrow"></span>
</a>
<div class="collapse" id="sidebarMultiLevel">
   <ul class="side-nav-second-level">
     <li class="side-nav-item">
       <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
         <span> Second Level </span>
         <span class="menu-arrow"></span>
     </a>
     <div class="collapse" id="sidebarSecondLevel">
         <ul class="side-nav-third-level">
           <li>
             <a href="javascript: void(0);">Item 1</a>
         </li>
         <li>
             <a href="javascript: void(0);">Item 2</a>
         </li>
     </ul>
 </div>
</li>
<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
      <span> Third Level </span>
      <span class="menu-arrow"></span>
  </a>
  <div class="collapse" id="sidebarThirdLevel">
      <ul class="side-nav-third-level">
        <li>
          <a href="javascript: void(0);">Item 1</a>
      </li>
      <li class="side-nav-item">
          <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
            <span> Item 2 </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarFourthLevel">
            <ul class="side-nav-forth-level">
              <li>
                <a href="javascript: void(0);">Item 2.1</a>
            </li>
            <li>
                <a href="javascript: void(0);">Item 2.2</a>
            </li>
        </ul>
    </div>
</li>
</ul>
</div>
</li>
</ul>
</div>
</li>
</ul>
<!-- End Sidebar -->

<div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
        <!-- Left Sidebar End -->