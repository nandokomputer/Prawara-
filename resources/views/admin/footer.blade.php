<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    <strong>Copyright &copy; 2022 Company, Prawara.Inc.</strong>
    All rights reserved.
  </footer>

  <!-- Modal Data-->
<div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style=" background-color: white;"></button>
      </div>
      <div class="modal-body">
      <form action="/data/add" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode Data</label>
            <input type="text" name="kddata" id="kddata" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bagian Disnaker</label>
            <div class="input-group" id="bagian" name="bagian">
              <select class="custom-select" id="bagian" name="bagian">
                <option selected>SEKRETARIAT</option>
                <option value="1">BIDANG TRANSMIGRASI</option>
                <option value="2">BIDANG PENEMPATAN TENAGA KERJA</option>
                <option value="3">BIDANG PELATIHAN DAN PRODUKTIVITAS TENAGA KERJA</option>
                <option value="4">BIDANG HUBUNGAN INDUSTRIAL </option>
              </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sub-Bagian </label>
            <div class="input-group" id="subbagian" name="subbagian">
              <select class="custom-select" id="subbagian" name="subbagian">
                <option selected>Sekretaris</option>
                <option value="1">Ka Subbag Keuangan dan Aset</option>
                <option value="2">Ka Subbag Umum dan Kepegawaian</option>
                <option value="3">Ka Subbag Perencanaan, Evaluasi dan Pelaporan </option>
              </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">File </label>
            <input type="text" name="file" id="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    
  </form>
    </div>
  </div>
</div>

 <!-- Modal info -->
 <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style=" background-color: white;"></button>
      </div>
      <div class="modal-body">
      
    <iframe
      id="JotFormIFrame-222391164051447"
      title="Tambah Data Rapat"
      onload="window.parent.scrollTo(0,0)"
      allowtransparency="true"
      allowfullscreen="true"
      allow="geolocation; microphone; camera"
      src="https://form.jotform.com/222391164051447"
      frameborder="0"
      style="
      min-width: 100%;
      height:539px;
      border:none;"
      scrolling="no"
    >
    </iframe>
    <script type="text/javascript">
      var ifr = document.getElementById("JotFormIFrame-222391164051447");
      if (ifr) {
        var src = ifr.src;
        var iframeParams = [];
        if (window.location.href && window.location.href.indexOf("?") > -1) {
          iframeParams = iframeParams.concat(window.location.href.substr(window.location.href.indexOf("?") + 1).split('&'));
        }
        if (src && src.indexOf("?") > -1) {
          iframeParams = iframeParams.concat(src.substr(src.indexOf("?") + 1).split("&"));
          src = src.substr(0, src.indexOf("?"))
        }
        iframeParams.push("isIframeEmbed=1");
        ifr.src = src + "?" + iframeParams.join('&');
      }
      window.handleIFrameMessage = function(e) {
        if (typeof e.data === 'object') { return; }
        var args = e.data.split(":");
        if (args.length > 2) { iframe = document.getElementById("JotFormIFrame-" + args[(args.length - 1)]); } else { iframe = document.getElementById("JotFormIFrame"); }
        if (!iframe) { return; }
        switch (args[0]) {
          case "scrollIntoView":
            iframe.scrollIntoView();
            break;
          case "setHeight":
            iframe.style.height = args[1] + "px";
            break;
          case "collapseErrorPage":
            if (iframe.clientHeight > window.innerHeight) {
              iframe.style.height = window.innerHeight + "px";
            }
            break;
          case "reloadPage":
            window.location.reload();
            break;
          case "loadScript":
            if( !window.isPermitted(e.origin, ['jotform.com', 'jotform.pro']) ) { break; }
            var src = args[1];
            if (args.length > 3) {
                src = args[1] + ':' + args[2];
            }
            var script = document.createElement('script');
            script.src = src;
            script.type = 'text/javascript';
            document.body.appendChild(script);
            break;
          case "exitFullscreen":
            if      (window.document.exitFullscreen)        window.document.exitFullscreen();
            else if (window.document.mozCancelFullScreen)   window.document.mozCancelFullScreen();
            else if (window.document.mozCancelFullscreen)   window.document.mozCancelFullScreen();
            else if (window.document.webkitExitFullscreen)  window.document.webkitExitFullscreen();
            else if (window.document.msExitFullscreen)      window.document.msExitFullscreen();
            break;
        }
        var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false;
        if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) {
          var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)};
          iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*");
        }
      };
      window.isPermitted = function(originUrl, whitelisted_domains) {
        var url = document.createElement('a');
        url.href = originUrl;
        var hostname = url.hostname;
        var result = false;
        if( typeof hostname !== 'undefined' ) {
          whitelisted_domains.forEach(function(element) {
              if( hostname.slice((-1 * element.length - 1)) === '.'.concat(element) ||  hostname === element ) {
                  result = true;
              }
          });
          return result;
        }
      };
      if (window.addEventListener) {
        window.addEventListener("message", handleIFrameMessage, false);
      } else if (window.attachEvent) {
        window.attachEvent("onmessage", handleIFrameMessage);
      }
      </script>
    </div>
  </div>
</div>

<!-- Modal Edit info-->
<div class="modal fade" id="editinfoModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Penjual</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style=" background-color: white;"></button>
      </div>
      <div class="modal-body">
      <form action="/info/edit" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode Informasi </label>
            <input type="text" name="kdinfo" class="form-control" id="kdinfo" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Informasi</label>
            <input type="text" name="info" class="form-control" id="info" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Deskripsi </label>
            <input type="text" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal </label>
            <input type="text" name="tanggal" class="form-control" id="tanggal" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gambar </label>
            <input type="text" name="gambar" class="form-control" id="gambar" aria-describedby="emailHelp">
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    
  </form>
    </div>
  </div>
</div>

<!-- Modal Hapus info-->
<div class="modal fade" id="hapusinfoModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Penjual</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style=" background-color: white;"></button>
      </div>
      <div class="modal-body">
      <form action="/info/hapus" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode Informasi </label>
            <input type="text" name="kdinfo" class="form-control" id="kdinfo" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Informasi</label>
            <input type="text" name="info" class="form-control" id="info" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Deskripsi </label>
            <input type="text" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal </label>
            <input type="text" name="tanggal" class="form-control" id="tanggal" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gambar </label>
            <input type="text" name="gambar" class="form-control" id="gambar" aria-describedby="emailHelp">
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Hapus</button>
      </div>
    
  </form>
    </div>
  </div>
</div>