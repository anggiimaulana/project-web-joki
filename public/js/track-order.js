// CSRF Token untuk Laravel
const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

async function trackOrder() {
    const orderId = document.getElementById("orderId").value.trim();
    const trackButton = document.getElementById("trackButton");
    const trackButtonText = document.getElementById("trackButtonText");
    const loadingIcon = document.getElementById("loadingIcon");
    const loadingState = document.getElementById("loadingState");

    if (!orderId) {
        showErrorPopup("Oops! UID Kosong", "Masukkan UID pesananmu terlebih dahulu untuk melacak status pesanan.");
        return;
    }

    showLoadingState(true);
    hideOrderStatus();

    try {
        const response = await fetch('/track-order/status', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: JSON.stringify({ unique_id: orderId })
        });

        const data = await response.json();

        if (data.success) {
            displayOrderStatus(data.data);
        } else {
            showErrorPopup("UID Tidak Ditemukan", data.message || "UID pesanan tidak ditemukan. Pastikan UID benar.");
        }
    } catch (error) {
        console.error('Error:', error);
        showErrorPopup("Kesalahan Koneksi", "Terjadi kesalahan saat menghubungi server. Silakan coba lagi nanti.");
    } finally {
        showLoadingState(false);
    }
}

function showLoadingState(show) {
    const trackButton = document.getElementById("trackButton");
    const trackButtonText = document.getElementById("trackButtonText");
    const loadingIcon = document.getElementById("loadingIcon");
    const loadingState = document.getElementById("loadingState");

    if (show) {
        trackButton.disabled = true;
        trackButton.classList.add("opacity-50", "cursor-not-allowed");
        trackButtonText.textContent = "Mencari...";
        loadingIcon.classList.remove("hidden");
        loadingState.classList.remove("hidden");
    } else {
        trackButton.disabled = false;
        trackButton.classList.remove("opacity-50", "cursor-not-allowed");
        trackButtonText.textContent = "Lacak";
        loadingIcon.classList.add("hidden");
        loadingState.classList.add("hidden");
    }
}

function displayOrderStatus(data) {
    document.getElementById("customerName").textContent = `Halo, ${data.customer_name}`;
    document.getElementById("uniqueId").textContent = data.unique_id;
    document.getElementById("serviceType").textContent = data.service_type;
    document.getElementById("totalAmount").textContent = data.total_amount;
    document.getElementById("estimatedCompletion").textContent = data.estimated_completion;

    const statusElement = document.getElementById("orderStatusText");
    statusElement.textContent = data.status;

    // Reset semua class dan set base classes
    statusElement.className = "text-base font-semibold text-center pt-2 px-2 py-1 rounded-lg";

    // Dapatkan classes untuk status
    const { textClass, borderClasses } = getColorAndBorderClass(data.status);
    
    // Add text class
    statusElement.classList.add(textClass);
    
    // Add border classes satu per satu
    borderClasses.forEach(cls => {
        statusElement.classList.add(cls);
    });

    document.getElementById("orderStatus").classList.remove("hidden");
}

function hideOrderStatus() {
    document.getElementById("orderStatus").classList.add("hidden");
}

function showErrorPopup(title, message) {
    document.getElementById("errorTitle").textContent = title;
    document.getElementById("errorMessage").textContent = message;

    const popup = document.getElementById("errorPopup");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.querySelector('.bg-white').classList.remove('scale-95');
        popup.querySelector('.bg-white').classList.add('scale-100');
    }, 10);
}

function closePopup() {
    const popup = document.getElementById("errorPopup");
    popup.querySelector('.bg-white').classList.remove('scale-100');
    popup.querySelector('.bg-white').classList.add('scale-95');

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 200);

    document.getElementById("orderId").focus();
}

document.getElementById("errorPopup").addEventListener('click', function (e) {
    if (e.target === this) {
        closePopup();
    }
});

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        const popup = document.getElementById("errorPopup");
        if (!popup.classList.contains('hidden')) {
            closePopup();
        }
    }
});

document.getElementById("orderId").addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        trackOrder();
    }
});

// WARNA + BORDER berdasarkan status - FIXED VERSION
function getColorAndBorderClass(status) {
    const s = status.toLowerCase();

    if (s.includes("menunggu konfirmasi")) return {
        textClass: "text-orange-500",
        borderClasses: ["border", "bg-orange-50"]
    };
    if (s.includes("dijadwalkan")) return {
        textClass: "text-orange-500",
        borderClasses: ["border", "bg-orange-50"]
    };
    if (s.includes("sedang dikerjakan")) return {
        textClass: "text-blue-400",
        borderClasses: ["border", "bg-blue-50"]
    };
    if (s.includes("sedang dikerjakan") || s.includes("dalam proses")) return {
        textClass: "text-blue-500",
        borderClasses: ["border", "bg-blue-50"]
    };
    if (s.includes("mendekati selesai")) return {
        textClass: "text-blue-500",
        borderClasses: ["border", "bg-blue-50"]
    };
    if (s.includes("menunggu validasi")) return {
        textClass: "text-green-500",
        borderClasses: ["border", "bg-green-50"]
    };
    if (s.includes("selesai") || s.includes("completed")) return {
        textClass: "text-green-500",
        borderClasses: ["border", "bg-green-50"]
    };
    if (s.includes("dibatalkan") || s.includes("cancelled")) return {
        textClass: "text-red-500",
        borderClasses: ["border", "bg-red-50"]
    };

    return {
        textClass: "text-gray-500",
        borderClasses: ["border", "bg-gray-50"]
    };
}