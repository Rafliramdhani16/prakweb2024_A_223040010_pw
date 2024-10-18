document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("formModal");
  const openModalBtn = document.querySelector(".tombolTambahData");
  const closeModalBtn = document.getElementById("closeModal");
  const form = modal.querySelector("form");
  const judulModalLabel = document.getElementById("judulModalLabel");
  const submitBtn = form.querySelector('button[type="submit"]');

  function openModal() {
    modal.classList.remove("hidden");
  }

  function closeModal() {
    modal.classList.add("hidden");
  }

  openModalBtn.addEventListener("click", function () {
    judulModalLabel.textContent = "Tambah Data Mahasiswa";
    submitBtn.textContent = "Tambah Data";
    form.reset();
    form.action = `${BASEURL}/mahasiswa/tambah`;
    openModal();
  });

  closeModalBtn.addEventListener("click", closeModal);

  document.querySelectorAll(".tampilModalUbah").forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      const id = this.dataset.id;
      judulModalLabel.textContent = "Ubah Data Mahasiswa";
      submitBtn.textContent = "Ubah Data";
      form.action = `${BASEURL}/mahasiswa/ubah`;

      fetch(`${BASEURL}/mahasiswa/getubah`, {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `id=${id}`,
      })
        .then((response) => response.json())
        .then((data) => {
          document.getElementById("id").value = data.id;
          document.getElementById("nama").value = data.nama;
          document.getElementById("nrp").value = data.nrp;
          document.getElementById("email").value = data.email;
          document.getElementById("jurusan").value = data.jurusan;
          openModal();
        });
    });
  });
});
