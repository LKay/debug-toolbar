<?php defined('SYSPATH') or die('No direct script access.') ?>

<!-- CSS styles (if not added to <head>) -->
<?php if (isset($styles)): ?>
	<?php echo $styles ?>
<?php endif ?>

<!-- Javascript -->
<script type="text/javascript">
<?php echo $scripts ?>
</script>

<div id="kohana-debug-toolbar">

	<!-- Toolbar -->
	<div id="debug-toolbar" class="debug-toolbar-align-<?php echo $align ?>">

		<!-- Kohana link -->
		<img src="data:image/png;base64,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" alt="Kohana" onclick="debugToolbar.collapse()">

		<!-- Kohana icon -->
		<?php if (Kohana::config('debug_toolbar.minimized') === TRUE): ?>
			<ul id="debug-toolbar-menu" class="menu" style="display: none">
		<?php else: ?>
			<ul id="debug-toolbar-menu" class="menu">
		<?php endif ?>

			<!-- Kohana version -->
			<li>
				<?php echo html::anchor("http://kohanaframework.org", Kohana::VERSION, array('target' => '_blank')) ?>
			</li>

			<!-- Benchmarks -->
			<?php if (Kohana::config('debug_toolbar.panels.benchmarks')): ?>
				<!-- Time -->
				<li id="time" onclick="debugToolbar.show('debug-benchmarks'); return false;">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAKrSURBVDjLpdPbT9IBAMXx/qR6qNbWUy89WS5rmVtutbZalwcNgyRLLMyuoomaZpRQCt5yNRELL0TkBSXUTBT5hZSXQPwBAvor/fZGazlb6+G8nIfP0znbgG3/kz+Knsbb+xxNV63DLxVLHzqV0vCrfMluzFmw1OW8ePEwf8+WgM1UXDnapVgLePr5Nj9DJBJGFEN8+TzKqL2RzkenV4yl5ws2BXob1WVeZxXhoB+PP0xzt0Bly0fKTePozV5GphYQPA46as+gU5/K+w2w6Ev2Ol/KpNCigM01R2uPgDcQIRSJEYys4JmNoO/y0tbnY9JlxnA9M15bfHZHCnjzVN4x7TLz6fMSJqsPgLAoMvV1niSQBGIbUP3Ki93t57XhItVXjulTQHf9hfk5/xgGyzQTgQjx7xvE4nG0j3UsiiLR1VVaLN3YpkTuNLgZGzRSq8wQUoD16flkOPSF28/cLCYkwqvrrAGXC1UYWtuRX1PR5RhgTJTI1Q4wKwzwWHk4kQI6a04nQ99mUOlczMYkFhPrBMQoN+7eQ35Nhc01SvA7OEMSFzTv8c/0UXc54xfQcj/bNzNmRmNy0zctMpeEQFSio/cdvqUICz9AiEPb+DLK2gE+2MrR5qXPpoAn6mxdr1GBwz1FiclDcAPCEkTXIboByz8guA75eg8WxxDtFZloZIdNKaDu5rnt9UVHE5POep6Zh7llmsQlLBNLSMTiEm5hGXXDJ6qb3zJiLaIiJy1Zpjy587ch1ahOKJ6XHGGiv5KeQSfFun4ulb/josZOYY0di/0tw9YCquX7KZVnFW46Ze2V4wU1ivRYe1UWI1Y1vgkDvo9PGLIoabp7kIrctJXSS8eKtjyTtuDErrK8jIYHuQf8VbK0RJUsLfEg94BfIztkLMvP3v3XN/5rfgIYvAvmgKE6GAAAAABJRU5ErkJggg==" alt="time">
					<?php echo round(($benchmarks['application']['total_time'])*1000, 2) ?> ms
				</li>
				<!-- Memory -->
				<li id="memory" onclick="debugToolbar.show('debug-benchmarks'); return false;">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGvSURBVDjLpZO7alZREEbXiSdqJJDKYJNCkPBXYq12prHwBezSCpaidnY+graCYO0DpLRTQcR3EFLl8p+9525xgkRIJJApB2bN+gZmqCouU+NZzVef9isyUYeIRD0RTz482xouBBBNHi5u4JlkgUfx+evhxQ2aJRrJ/oFjUWysXeG45cUBy+aoJ90Sj0LGFY6anw2o1y/mK2ZS5pQ50+2XiBbdCvPk+mpw2OM/Bo92IJMhgiGCox+JeNEksIC11eLwvAhlzuAO37+BG9y9x3FTuiWTzhH61QFvdg5AdAZIB3Mw50AKsaRJYlGsX0tymTzf2y1TR9WwbogYY3ZhxR26gBmocrxMuhZNE435FtmSx1tP8QgiHEvj45d3jNlONouAKrjjzWaDv4CkmmNu/Pz9CzVh++Yd2rIz5tTnwdZmAzNymXT9F5AtMFeaTogJYkJfdsaaGpyO4E62pJ0yUCtKQFxo0hAT1JU2CWNOJ5vvP4AIcKeao17c2ljFE8SKEkVdWWxu42GYK9KE4c3O20pzSpyyoCx4v/6ECkCTCqccKorNxR5uSXgQnmQkw2Xf+Q+0iqQ9Ap64TwAAAABJRU5ErkJggg==" alt="memory">
					<?php echo text::bytes($benchmarks['application']['total_memory']) ?>
				</li>
			<?php endif ?>

			<!-- Queries -->
			<?php if (Kohana::config('debug_toolbar.panels.database')): ?>
				<li id="toggle-database" onclick="debugToolbar.show('debug-database'); return false;">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAEYSURBVBgZBcHPio5hGAfg6/2+R980k6wmJgsJ5U/ZOAqbSc2GnXOwUg7BESgLUeIQ1GSjLFnMwsKGGg1qxJRmPM97/1zXFAAAAEADdlfZzr26miup2svnelq7d2aYgt3rebl585wN6+K3I1/9fJe7O/uIePP2SypJkiRJ0vMhr55FLCA3zgIAOK9uQ4MS361ZOSX+OrTvkgINSjS/HIvhjxNNFGgQsbSmabohKDNoUGLohsls6BaiQIMSs2FYmnXdUsygQYmumy3Nhi6igwalDEOJEjPKP7CA2aFNK8Bkyy3fdNCg7r9/fW3jgpVJbDmy5+PB2IYp4MXFelQ7izPrhkPHB+P5/PjhD5gCgCenx+VR/dODEwD+A3T7nqbxwf1HAAAAAElFTkSuQmCC" alt="queries">
					<?php echo isset($queries) ? $query_count : 0 ?>
				</li>
			<?php endif ?>

			<!-- Vars -->
			<?php if (Kohana::config('debug_toolbar.panels.vars')): ?>
				<li id="toggle-vars" onclick="debugToolbar.show('debug-vars'); return false;">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFWSURBVBgZBcE/SFQBAAfg792dppJeEhjZn80MChpqdQ2iscmlscGi1nBPaGkviKKhONSpvSGHcCrBiDDjEhOC0I68sjvf+/V9RQCsLHRu7k0yvtN8MTMPICJieaLVS5IkafVeTkZEFLGy0JndO6vWNGVafPJVh2p8q/lqZl60DpIkaWcpa1nLYtpJkqR1EPVLz+pX4rj47FDbD2NKJ1U+6jTeTRdL/YuNrkLdhhuAZVP6ukqbh7V0TzmtadSEDZXKhhMG7ekZl24jGDLgtwEd6+jbdWAAEY0gKsPO+KPy01+jGgqlUjTK4ZroK/UVKoeOgJ5CpRyq5e2qjhF1laAS8c+Ymk1ZrVXXt2+9+fJBYUwDpZ4RR7Wtf9u9m2tF8Hwi9zJ3/tg5pW2FHVv7eZJHd75TBPD0QuYze7n4Zdv+ch7cfg8UAcDjq7mfwTycew1AEQAAAMB/0x+5JQ3zQMYAAAAASUVORK5CYII=" alt="vars">
					vars
				</li>
			<?php endif ?>

			<!-- Ajax -->
			<?php if (Kohana::config('debug_toolbar.panels.ajax')): ?>
				<li id="toggle-ajax" onclick="debugToolbar.show('debug-ajax'); return false;" style="display: none">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAALvSURBVBgZBcFNaNUFAADw3//jbe/t6d6cc2/kUpeXsEgUsSSiKIzAQxDdvCgdulgagmBXLx4K7BgRWamnOgSDIj3EusRangwlbVvOyba25tvH23v/z36/oCxLcOr7uaO48sxA9Vg7LbTTQloUtrKihXUsI8cqVvAtfo4Biix78eDItmPnX90FADaTotFOisZqJx9NUta7udnlDT/+vXkc52KAIsua/T0BmHuSqwSBOCCK6a2E9vSGojBUiTg0WvNUoz74xeTjT0OAPE376zFZwXoSaKU86dLq0OqwssXSRg4uXn/o2Fjd80OVXTFAnqaD23tCm102O7kwDMSIIsKISCAKKBDka36bXnX7YetxDJAnSbNRi7S2Mu1uKQxLUUiYB6KQSCmKUEYW17o+u/lgDadigCxJ9jb7K1qdUgYlUR4IS+RsPfhFliaeGzkhr+SyJBv74aOX/wsB8qS7d6TRazMpBSFREAjWH0lmflV21lR7e/T19fl3acmbAw+9MzT7CQRlWXrr0k+1OArb3104bvKfVKEE6fSEffv2mZ+f12w2hWFodnbW6Oio8fFxRVHUY8i6ya56vSoMKKAkCAi279bpdCwvL5uYmFCr1Rw4cEC73Vav1786c+ZMO4Q86fbFCnFIFAYEoY17tzSiTcPDw+7fv+/1kxe9e/q8R/PzRkZG7N+///Tly5fL+JVz14dw6eizeyyslWYXc/UqnVZLFEWazabh4WG1Kv19lGVgfX3d3Nyc6elpcZ4kb+DEH3dnrG7FNrqlNC8V2UEjG/MGBxeMjY2ZHP/aVFDa8/RuKysr7ty58yUuxHmaHn77tRdqH598CQDkJde+mcKAhYUFRw4f1Ol0zMzMaDQa8F6tVns/ztN0ZmG55drNuwa21Qz0Vw3UezXqvQYGh1y9etUHH5419fukxcVFy2XTrVufl1mW3bxx40YeHDp5ZQjnsBc7sRM7sAONak+lUq1WHKrds7S05M/yyF84efva2Sn4HxcNUm7wsX3qAAAAAElFTkSuQmCC" alt="ajax">
					ajax (<span>0</span>)
				</li>
			<?php endif ?>

			<!-- Files -->
			<?php if (Kohana::config('debug_toolbar.panels.files')): ?>
				<li id="toggle-files" onclick="debugToolbar.show('debug-files'); return false;">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIpSURBVDjLddM9aFRBFIbh98zM3WyybnYVf4KSQjBJJVZBixhRixSaShtBMKUoWomgnaCxsJdgIQSstE4nEhNREgyoZYhpkogkuMa4/3fuHIu7gpLd00wz52POMzMydu/Dy958dMwYioomIIgqDa+VnWrzebNUejY/NV6nQ8nlR4ufXt0fzm2WgxUgqBInAWdhemGbpcWNN9/XN27PPb1QbRdgjEhPqap2ZUv5+iOwvJnweT1mT5djZKjI6Ej/udz+wt1OJzAKYgWyDjJWyFghmzFsbtcY2gsTJwv09/Vc7RTgAEQgsqAKaoWsM8wu/z7a8B7vA8cHD3Fr+ktFgspO3a+vrdVfNEulJ/NT4zWngCBYY1oqSghKI465fvYwW+VAatPX07IZmF7YfrC0uDE8emPmilOFkHYiBKxAxhmSRPlZVVa2FGOU2Ad2ap4zg92MDBXJZczFmdflx05VEcAZMGIIClZASdesS2cU/dcm4sTBArNzXTcNakiCb3/HLRsn4Fo2qyXh3WqDXzUlcgYnam3Dl4Hif82dbOiyiBGstSjg4majEpl8rpCNUQUjgkia0M5GVAlBEBFUwflEv12b/Hig6SmA1iDtzhcsE6eP7LIxAchAtwNVxc1MnhprN/+lh0txErxrPZVdFdRDEEzHT6LWpTbtq+HLSDDiOm2o1uqlyOT37bIhHdKaXoL6pqhq24Dzd96/tUYGwPSBVv7atFglaFIu5KLuPxeX/xsp7aR6AAAAAElFTkSuQmCC" alt="files">
					files
				</li>
			<?php endif ?>

			<!-- Modules -->
			<?php if (Kohana::config('debug_toolbar.panels.modules')): ?>
				<li id="toggle-modules" onclick="debugToolbar.show('debug-modules'); return false;">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHhSURBVDjLpZI9SJVxFMZ/r2YFflw/kcQsiJt5b1ije0tDtbQ3GtFQYwVNFbQ1ujRFa1MUJKQ4VhYqd7K4gopK3UIly+57nnMaXjHjqotnOfDnnOd/nt85SURwkDi02+ODqbsldxUlD0mvHw09ubSXQF1t8512nGJ/Uz/5lnxi0tB+E9QI3D//+EfVqhtppGxUNzCzmf0Ekojg4fS9cBeSoyzHQNuZxNyYXp5ZM5Mk1ZkZT688b6thIBenG/N4OB5B4InciYBCVyGnEBHO+/LH3SFKQuF4OEs/51ndXMXC8Ajqknrcg1O5PGa2h4CJUqVES0OO7sYevv2qoFBmJ/4gF4boaOrg6rPLYWaYiVfDo0my8w5uj12PQleB0vcp5I6HsHAUoqUhR29zH+5B4IxNTvDmxljy3x2YCYUwZVlbzXJh9UKeQY6t2m0Lt94Oh5loPdqK3EkjzZi4MM/Y9Db3MTv/mYWVxaqkw9IOATNR7B5ABHPrZQrtg9sb8XDKa1+QOwsri4zeHD9SAzE1wxBTXz9xtvMc5ZU5lirLSKIz18nJnhOZjb22YKkhd4odg5icpcoyL669TAAujlyIvmPHSWXY1ti1AmZ8mJ3ElP1ips1/YM3H300g+W+51nc95YPEX8fEbdA2ReVYAAAAAElFTkSuQmCC" alt="modules">
					modules
				</li>
			<?php endif ?>

			<!-- Routes -->
			<?php if (Kohana::config('debug_toolbar.panels.routes')): ?>
				<li id="toggle-routes" onclick="debugToolbar.show('debug-routes'); return false;">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHYSURBVDjLlVLPS1RxHJynpVu7KEn0Vt+2l6IO5qGCIsIwCPwD6hTUaSk6REoUHeoQ0qVAMrp0COpY0SUIPVRgSl7ScCUTst6zIoqg0y7lvpnPt8MWKuuu29w+hxnmx8dzzmE5+l7mxk1u/a3Dd/ejDjSsII/m3vjJ9MF0yt93ZuTkdD0CnnMO/WOnmsxsJp3yd2zfvA3mHOa+zuHTjy/zojrvHX1YqunAZE9MlpUcZAaZQBNIZUg9XdPBP5wePuEO7eyGQXg29QL3jz3y1oqwbvkhCuYEOQMp/HeJohCbICMUVwr0DvZcOnK9u7GmQNmBQLJCgORxkneqRmAs0BFmDi0bW9E72PPda/BikwWi0OEHkNR14MrewsTAZF+lAAWZEH6LUCwUkUlntrS1tiG5IYlEc6LcjYjSYuncngtdhakbM5dXlhgTNEMYLqB9q49MKgsPjTBXntVgkDNIgmI1VY2Q7QzgJ9rx++ci3ofziBYiiELQEUAyhB/D29M3Zy+uIkDIhGYvgeKvIkbHxz6Tevzq6ut+ANh9fldetMn80OzZVVdgLFjBQ0tpEz68jcB4ifx3pQeictVXIEETnBPCKMLEwBIZAPJD767V/ETGwsjzYYiC6vzEP9asLo3SGuQvAAAAAElFTkSuQmCC" alt="routes">
					routes
				</li>
			<?php endif ?>

			<!-- Custom data -->
			<?php if (Kohana::config('debug_toolbar.panels.customs')): ?>
				<li id="toggle-customs" onclick="debugToolbar.show('debug-customs'); return false;">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIMSURBVDjLpVNLaxNRFP6STmaKdFqrgYKWlGLSgoiKCwsKVnFRtBsVUSTNyj/gxv4Bl678AyKCoCulgmtd+W7romgzKT4QMW1G+5hMpnPnnuuZm6ZNawoVBw7n3pn5vvP4zkkopfA/j9F8cafO3FekCjGpIgKIvayftTXOkr71jkz2/UXA4HxXfz72gIx/lBsWSfiVtwiWHK8B3kRQeX/6lmnnkuDAwn0MJSKQEFChQCp9CcHixxgsGWw3B01uRKfx9t1HIP1POpoSdUulLyD0vqO26IAkDW7tgSZYeHPqcmpXxkTChKzOaAKSEdo6jnEWVY5ehFxdHs2cn55rScDR73H6DKyyRWs1R0haGdR+z8YZ3MyMTj9rpUKi/PLkUJuZfmX3nkNYmQBxzYprpyCA2XMRrvNAcdfDhgKkm6ttKTdW6jH4w4RpD/ALAaNzhH2kSwALoSJCd9+VhIqEVVeD4C1MclaOT0Ke0Cowq+X9eLHapLH23f1XreDzI27LfqT2HIfvzsRAyLB2N1coXV8vodUkfn16+HnnvrPDhrmXsxBY+fmOwcVlJh/IFebK207iuqSShg0rjer8B9TcWY7q38nmnRstm7g1gy9PDk2129mjinjy3OIvJjvI4PJ2u7CJgMEdUMmVuA9ShLez14rj/7RMDHzNAzTP/gCDvR2to968NSs9HBxqvu/E/gBCSoxk53STJQAAAABJRU5ErkJggg==" alt="customs">
					customs
				</li>
			<?php endif ?>

			<!-- Swap sides -->
			<li onclick="debugToolbar.swap(); return false;">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAABjSURBVCjPY/zPgB8wMVCqgAVElP//x/AHDH+D4S8w/sWwl5GBgfE/MSYU/Ifphej8xbCLEaaAOBNS/yPbjIC3iHZD5P9faHqvk+gGbzQTYD76TLQbbP//hOqE6f5AvBsIRhYAysRMHy5Vf6kAAAAASUVORK5CYII=" alt="align">
			</li>

			<!-- Close -->
			<li class="last" onclick="debugToolbar.close(); return false;">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIhSURBVDjLlZPrThNRFIWJicmJz6BWiYbIkYDEG0JbBiitDQgm0PuFXqSAtKXtpE2hNuoPTXwSnwtExd6w0pl2OtPlrphKLSXhx07OZM769qy19wwAGLhM1ddC184+d18QMzoq3lfsD3LZ7Y3XbE5DL6Atzuyilc5Ciyd7IHVfgNcDYTQ2tvDr5crn6uLSvX+Av2Lk36FFpSVENDe3OxDZu8apO5rROJDLo30+Nlvj5RnTlVNAKs1aCVFr7b4BPn6Cls21AWgEQlz2+Dl1h7IdA+i97A/geP65WhbmrnZZ0GIJpr6OqZqYAd5/gJpKox4Mg7pD2YoC2b0/54rJQuJZdm6Izcgma4TW1WZ0h+y8BfbyJMwBmSxkjw+VObNanp5h/adwGhaTXF4NWbLj9gEONyCmUZmd10pGgf1/vwcgOT3tUQE0DdicwIod2EmSbwsKE1P8QoDkcHPJ5YESjgBJkYQpIEZ2KEB51Y6y3ojvY+P8XEDN7uKS0w0ltA7QGCWHCxSWWpwyaCeLy0BkA7UXyyg8fIzDoWHeBaDN4tQdSvAVdU1Aok+nsNTipIEVnkywo/FHatVkBoIhnFisOBoZxcGtQd4B0GYJNZsDSiAEadUBCkstPtN3Avs2Msa+Dt9XfxoFSNYF/Bh9gP0bOqHLAm2WUF1YQskwrVFYPWkf3h1iXwbvqGfFPSGW9Eah8HSS9fuZDnS32f71m8KFY7xs/QZyu6TH2+2+FAAAAABJRU5ErkJggg==" alt="close">
			</li>
		</ul>
	</div>

	<!-- Benchmarks -->
	<?php if (Kohana::config('debug_toolbar.panels.benchmarks')): ?>
		<div id="debug-benchmarks" class="top" style="display: none;">
			<h1>Benchmarks</h1>
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th align="left">benchmark</th>
					<th align="right">count</th>
					<th align="right">avg time</th>
					<th align="right">total time</th>
					<th align="right">avg memory</th>
					<th align="right">total memory</th>
				</tr>
				<?php if (count($benchmarks)):
					$application = array_pop($benchmarks);?>
					<?php foreach ((array)$benchmarks as $group => $marks): ?>
						<tr>
							<th colspan="6"><?php echo $group?></th>
						</tr>
						<?php foreach($marks as $benchmark): ?>
						<tr class="<?php echo text::alternate('odd','even')?>">
							<td align="left"><?php echo $benchmark['name'] ?></td>
							<td align="right"><?php echo $benchmark['count'] ?></td>
							<td align="right"><?php echo sprintf('%.2f', $benchmark['avg_time'] * 1000) ?> ms</td>
							<td align="right"><?php echo sprintf('%.2f', $benchmark['total_time'] * 1000) ?> ms</td>
							<td align="right"><?php echo text::bytes($benchmark['avg_memory']) ?></td>
							<td align="right"><?php echo text::bytes($benchmark['total_memory']) ?></td>
						</tr>
						<?php endforeach; ?>
					<?php endforeach; ?>
						<tr>
							<th colspan="2" align="left">APPLICATION</th>
							<th align="right"><?php echo sprintf('%.2f', $application['avg_time'] * 1000) ?> ms</th>
							<th align="right"><?php echo sprintf('%.2f', $application['total_time'] * 1000) ?> ms</th>
							<th align="right"><?php echo text::bytes($application['avg_memory']) ?></th>
							<th align="right"><?php echo text::bytes($application['total_memory']) ?></th>
						</tr>
				<?php else: ?>
					<tr class="<?php echo text::alternate('odd','even') ?>">
						<td colspan="6">no benchmarks to display</td>
					</tr>
				<?php endif ?>
			</table>
		</div>
	<?php endif ?>

	<!-- Database -->
	<?php if (Kohana::config('debug_toolbar.panels.database')): ?>
		<div id="debug-database" class="top" style="display: none;">
			<h1>SQL Queries</h1>
			<table cellspacing="0" cellpadding="0">
				<tr align="left">
					<th>#</th>
					<th>query</th>
					<th>time</th>
					<th>memory</th>
				</tr>
				<?php foreach ($queries as $db_profile => $stats):
					list($sub_count, $sub_time, $sub_memory) = array_pop($stats); ?>
				<tr align="left">
					<th colspan="4">DATABASE "<?php echo strtoupper($db_profile) ?>"</th>
				</tr>
					<?php foreach ($stats as $num => $query): ?>
					<tr class="<?php echo text::alternate('odd','even') ?>">
						<td><?php echo $num+1 ?></td>
						<td><?php echo $query['name'] ?></td>
						<td><?php echo number_format($query['time'] * 1000, 3) ?> ms</td>
						<td><?php echo number_format($query['memory'] / 1024, 3) ?> kb</td>
					</tr>
					<?php	endforeach;	?>
					<tr>
						<th>&nbsp;</th>
						<th><?php echo $sub_count ?> total</th>
						<th><?php echo number_format($sub_time * 1000, 3) ?> ms</th>
						<th><?php echo number_format($sub_memory / 1024, 3) ?> kb</th>
					</tr>
				<?php endforeach; ?>
				<?php if (count($queries) > 1): ?>
					<tr>
						<th colspan="2" align="left"><?php echo $query_count ?> TOTAL</th>
						<th><?php echo number_format($total_time * 1000, 3) ?> ms</th>
						<th><?php echo number_format($total_memory / 1024, 3) ?> kb</th>
					</tr>
				<?php endif; ?>
			</table>
		</div>
	<?php endif ?>

	<!-- Vars -->
	<?php if (Kohana::config('debug_toolbar.panels.vars')): ?>
		<div id="debug-vars" class="top" style="display: none;">
			<h1>Vars</h1>
			<ul class="varmenu">
				<li onclick="debugToolbar.showvar(this, 'vars-post'); return false;">POST</li>
				<li onclick="debugToolbar.showvar(this, 'vars-get'); return false;">GET</li>
				<li onclick="debugToolbar.showvar(this, 'vars-files'); return false;">FILES</li>
				<li onclick="debugToolbar.showvar(this, 'vars-server'); return false;">SERVER</li>
				<li onclick="debugToolbar.showvar(this, 'vars-cookie'); return false;">COOKIE</li>
				<li onclick="debugToolbar.showvar(this, 'vars-session'); return false;">SESSION</li>
			</ul>
			<div style="display: none;" id="vars-post">
				<?php echo isset($_POST) ? Debug::vars($_POST) : Debug::vars(array()) ?>
			</div>
			<div style="display: none;" id="vars-get">
				<?php echo isset($_GET) ? Debug::vars($_GET) : Debug::vars(array()) ?>
			</div>
			<div style="display: none;" id="vars-files">
				<?php echo isset($_FILES) ? Debug::vars($_FILES) : Debug::vars(array()) ?>
			</div>
			<div style="display: none;" id="vars-server">
				<?php echo isset($_SERVER) ? Debug::vars($_SERVER) : Debug::vars(array()) ?>
			</div>
			<div style="display: none;" id="vars-cookie">
				<?php echo isset($_COOKIE) ? Debug::vars($_COOKIE) : Debug::vars(array()) ?>
			</div>
			<div style="display: none;" id="vars-session">
				<?php echo isset($_SESSION) ? Debug::vars($_SESSION) : Debug::vars(array()) ?>
			</div>
		</div>
	<?php endif ?>

	<!-- Ajax Requests -->
	<?php if (Kohana::config('debug_toolbar.panels.ajax')): ?>
		<div id="debug-ajax" class="top" style="display:none;">
			<h1>Ajax</h1>
			<table cellspacing="0" cellpadding="0">
				<tr align="left">
					<th width="1%">#</th>
					<th width="150">source</th>
					<th width="150">status</th>
					<th>request</th>
				</tr>
			</table>
		</div>
	<?php endif ?>

	<!-- Included Files -->
	<?php if (Kohana::config('debug_toolbar.panels.files')): ?>
		<div id="debug-files" class="top" style="display: none;">
			<h1>Files</h1>
			<table cellspacing="0" cellpadding="0">
				<tr align="left">
					<th>#</th>
					<th>file</th>
					<th>size</th>
					<th>lines</th>
				</tr>
				<?php $total_size = $total_lines = 0 ?>
				<?php foreach ((array)$files as $id => $file): ?>
					<?php
					$size = filesize($file);
					$lines = count(file($file));
					?>
					<tr class="<?php echo text::alternate('odd','even')?>">
						<td><?php echo $id + 1 ?></td>
						<td><?php echo $file ?></td>
						<td><?php echo $size ?></td>
						<td><?php echo $lines ?></td>
					</tr>
					<?php
					$total_size += $size;
					$total_lines += $lines;
					?>
				<?php endforeach; ?>
				<tr align="left">
					<th colspan="2">total</th>
					<th><?php echo text::bytes($total_size) ?></th>
					<th><?php echo number_format($total_lines) ?></th>
				</tr>
			</table>
		</div>
	<?php endif ?>

	<!-- Module list -->
	<?php if (Kohana::config('debug_toolbar.panels.modules')):
			$mod_counter = 0; ?>
		<div id="debug-modules" class="top" style="display: none;">
			<h1>Modules</h1>
			<table cellspacing="0" cellpadding="0">
				<tr align="left">
					<th>#</th>
					<th>name</th>
					<th>rel path</th>
					<th>abs path</th>
				</tr>
				<?php foreach($modules as $name => $path): ?>
				<tr class="<?php echo text::alternate('odd','even')?>">
					<td><?php echo ++$mod_counter ?></td>
					<td><?php echo $name ?></td>
					<td><?php echo $path ?></td>
					<td><?php echo realpath($path) ?></td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
	<?php endif ?>

	<!-- Routes -->
	<?php if (Kohana::config('debug_toolbar.panels.routes')):
			$r_counter = 0; ?>
		<div id="debug-routes" class="top" style="display: none;">
			<h1>Routes</h1>
			<table cellspacing="0" cellpadding="0">
				<tr align="left">
					<th>#</th>
					<th>name</th>
				</tr>
				<?php foreach($routes as $name => $route):
						$class = ($route == Request::initial()->route() ? ' current' : ''); ?>
				<tr class="<?php echo text::alternate('odd','even').$class?>">
					<td><?php echo ++$r_counter ?></td>
					<td><?php echo $name ?></td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
	<?php endif ?>

	<!-- Custom data-->
	<?php if (Kohana::config('debug_toolbar.panels.customs') && count($customs) > 0):
			$r_counter = 0; ?>
		<div id="debug-customs" class="top" style="display: none;">
			<h1>Custom data</h1>
			<ul class="sectionmenu">
				<?php foreach($customs as $section => $data): ?>
				<li onclick="debugToolbar.showvar(this, 'customs-<?php echo $section ?>'); return false;"><?php echo $section ?></li>
				<?php endforeach; ?>
			</ul>
			<?php foreach($customs as $section => $data): ?>
			<div style="display: none;" id="customs-<?php echo $section ?>">
					<pre><?php echo $data ?></pre>
			</div>
			<?php endforeach; ?>
		</div>
	<?php endif ?>
</div>