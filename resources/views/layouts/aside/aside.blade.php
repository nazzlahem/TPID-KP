<?php $page = isset($_GET['page']) ? $_GET['page'] : "index"; ?>

<!--begin::Aside Menu-->
<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
	<!--begin::Menu-->
	<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
		<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
			<span class="menu-link">
				<span class="menu-icon">
					<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
							<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
							<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
							<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<span class="menu-title">Dashboard</span>
				<span class="menu-arrow"></span>
			</span>
			<div class="menu-sub menu-sub-accordion menu-active-bg">
				<div class="menu-item">
					<a class="menu-link {{ ($page === "Home") ? 'active' : '' }}" href="/home">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Home</span>
					</a>
				</div>
			</div>
		</div>
		<div class="menu-item">
			<div class="menu-content pt-8 pb-2">
				<span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
			</div>
		</div>

		<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
			<span class="menu-link">
				<span class="menu-icon">
					<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
							<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
							<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<span class="menu-title">Calendar</span>
				<span class="menu-arrow"></span>
			</span>
			<div class="menu-sub menu-sub-accordion">
				<div class="menu-item">
					<a class="menu-link {{ ($page === "calendar") ? 'active' : '' }}" href="/calendar">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">List</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link {{ ($page === "addcalendar") ? 'active' : '' }}" href="/calendar-add">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Add</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link {{ ($page === "addcuti") ? 'active' : '' }}" href="/calendar-cuti">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Add Cuti</span>
					</a>
				</div>
			</div>
		</div>
		<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
			<span class="menu-link">
				<span class="menu-icon">
					<!--begin::Svg Icon | path: icons/duotune/files/fil025.svg-->
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black" />
							<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
							<path d="M10.3629 14.0084L8.92108 12.6429C8.57518 12.3153 8.03352 12.3153 7.68761 12.6429C7.31405 12.9967 7.31405 13.5915 7.68761 13.9453L10.2254 16.3488C10.6111 16.714 11.215 16.714 11.6007 16.3488L16.3124 11.8865C16.6859 11.5327 16.6859 10.9379 16.3124 10.5841C15.9665 10.2565 15.4248 10.2565 15.0789 10.5841L11.4631 14.0084C11.1546 14.3006 10.6715 14.3006 10.3629 14.0084Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<span class="menu-title">Attendance</span>
				<span class="menu-arrow"></span>
			</span>
			<div class="menu-sub menu-sub-accordion">
				<div class="menu-item">
					<a class="menu-link {{ ($page === "absen") ? 'active' : '' }}" href="/absen">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">List</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link {{ ($page === "addabsen") ? 'active' : '' }}" href="addabsen">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Add</span>
					</a>
				</div>
			</div>
		</div>
		<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
			<span class="menu-link">
				<span class="menu-icon">
					<!--begin::Svg Icon | path: icons/duotune/electronics/elc002.svg-->
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="black" />
							<path opacity="0.3" d="M17 2H7C6.4 2 6 2.4 6 3V20H18V3C18 2.4 17.6 2 17 2Z" fill="black" />
							<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<span class="menu-title">Assets</span>
				<span class="menu-arrow"></span>
			</span>
			<div class="menu-sub menu-sub-accordion">
				<div class="menu-item">
					<a class="menu-link {{ ($page === "assets") ? 'active' : '' }}" href="/assets">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">List</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link {{ ($page === "available") ? 'active' : '' }}" href="/availassets">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Available</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link {{ ($page === "borrower") ? 'active' : '' }}" href="/borrower">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Borrower</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link {{ ($page === "addassets") ? 'active' : '' }}" href="/addassets">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Add</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link {{ ($page === "tagihan") ? 'active' : '' }}" href="/tagihan">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Tagihan</span>
					</a>
				</div>
			</div>
		</div>
		<div class="menu-item">
			<div class="menu-content pt-8 pb-2">
				<span class="menu-section text-muted text-uppercase fs-8 ls-1">Report</span>
			</div>
		</div>
		<div class="menu-item">
			<a class="menu-link {{ ($page === "report") ? 'active' : '' }}" href="/report">
				<span class="menu-icon">
					<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
							<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<span class="menu-title">Report</span>
			</a>
			<a class="menu-link {{ ($page === "logact") ? 'active' : '' }} ?>" href="/logact">
				<span class="menu-icon">
					<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
							<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
							<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
							<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<span class="menu-title">Log Activity</span>
			</a>
		</div>

		<div class="menu-item">
			<div class="menu-content pt-8 pb-2">
				<span class="menu-section text-muted text-uppercase fs-8 ls-1">Setting</span>
			</div>
		</div>
		<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
			<span class="menu-link">
				<span class="menu-icon">
					<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
							<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<span class="menu-title">User Management</span>
				<span class="menu-arrow"></span>
			</span>
			<div class="menu-sub menu-sub-accordion">
				<div class="menu-item">
					<a class="menu-link {{ ($page === "userlist") ? 'active' : '' }} ?>" href="/userlist">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">User List</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link {{ ($page === "role") ? 'active' : '' }}" href="/role">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Role</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link {{ ($page === "permissions") ? 'active' : '' }}" href="/permission">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Permissions</span>
					</a>
				</div>
			</div>
		</div>

	</div>
	<!--end::Menu-->
</div>
<!--end::Aside Menu-->