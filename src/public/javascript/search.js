// document.getElementById("searchForm").addEventListener("submit", function (event) {
//     event.preventDefault(); 
//     const searchInput = document.getElementById("searchInput").value;

//     fetch("/search", {
//         method: "POST",
//         headers: {
//             "Content-Type": "application/json"
//             },
//             body: JSON.stringify({ searchInput })
//         .then(response => response.json())
//             .then(data => {
//                 // Update the content of the 'songList' with the search results
//                 const songList = document.getElementById("songList");
//                 songList.innerHTML = "";

//                 data.forEach(item => {
//                     // Create and append elements for each search result item
//                     const itemAlbum = document.createElement("a");
//                     itemAlbum.className = "item_album";

//                     const wrap = document.createElement("div");
//                     wrap.className = "wrap";

//                     const img = document.createElement("img");
//                     img.src = item.image_path;
//                     img.alt = "";

//                     const h5 = document.createElement("h5");

//                     const judul = document.createElement("div");
//                     judul.textContent = item.nama_album;

//                     const sub = document.createElement("div");
//                     sub.textContent = item.artist;

//                     h5.appendChild(judul);
//                     h5.appendChild(sub);

//                     wrap.appendChild(img);
//                     wrap.appendChild(h5);
//                     itemAlbum.appendChild(wrap);
//                     songList.appendChild(itemAlbum);
//                 });
//             })
//             .catch(error => console.error(error));
// }
// );

























