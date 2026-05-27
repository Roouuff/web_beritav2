#!/bin/bash
# =============================================================================
# setup-sbadmin2.sh — Download & Setup SB Admin 2 Template Assets
# =============================================================================
# Praktikum 11 — Blade Laravel, Auth Laravel & Integrasi Template SB Admin 2
#
# Jalankan script ini sekali setelah clone:
#   chmod +x setup-sbadmin2.sh
#   ./setup-sbadmin2.sh
# =============================================================================

set -e

SBADMIN_URL="https://github.com/startbootstrap/startbootstrap-sb-admin-2/archive/refs/heads/master.zip"
TMP_DIR="/tmp/sbadmin2_setup"
PUBLIC_DIR="public/sbadmin2"

echo ""
echo "======================================================"
echo "  SB Admin 2 Setup — Praktikum 11"
echo "======================================================"
echo ""

# 1. Download
echo "[1/4] Downloading SB Admin 2..."
mkdir -p "$TMP_DIR"
curl -L "$SBADMIN_URL" -o "$TMP_DIR/sbadmin2.zip"

# 2. Extract
echo "[2/4] Extracting..."
unzip -q "$TMP_DIR/sbadmin2.zip" -d "$TMP_DIR"

# 3. Copy assets to public/sbadmin2/
echo "[3/4] Copying assets to $PUBLIC_DIR ..."
mkdir -p "$PUBLIC_DIR"

SRC="$TMP_DIR/startbootstrap-sb-admin-2-master"

# CSS
mkdir -p "$PUBLIC_DIR/css"
cp "$SRC/css/sb-admin-2.min.css" "$PUBLIC_DIR/css/"
cp "$SRC/css/sb-admin-2.css"     "$PUBLIC_DIR/css/"

# JS
mkdir -p "$PUBLIC_DIR/js"
cp "$SRC/js/sb-admin-2.min.js" "$PUBLIC_DIR/js/"
cp "$SRC/js/sb-admin-2.js"     "$PUBLIC_DIR/js/"
cp -r "$SRC/js/demo"           "$PUBLIC_DIR/js/"

# Vendor libraries
mkdir -p "$PUBLIC_DIR/vendor"
cp -r "$SRC/vendor/jquery"          "$PUBLIC_DIR/vendor/"
cp -r "$SRC/vendor/bootstrap"       "$PUBLIC_DIR/vendor/"
cp -r "$SRC/vendor/jquery-easing"   "$PUBLIC_DIR/vendor/"
cp -r "$SRC/vendor/fontawesome-free" "$PUBLIC_DIR/vendor/"
cp -r "$SRC/vendor/chart.js"        "$PUBLIC_DIR/vendor/" 2>/dev/null || true

# Sample images
mkdir -p "$PUBLIC_DIR/img"
cp "$SRC/img/"*.svg "$PUBLIC_DIR/img/" 2>/dev/null || true

# 4. Cleanup
echo "[4/4] Cleaning up..."
rm -rf "$TMP_DIR"

echo ""
echo "======================================================"
echo "  ✅ SB Admin 2 assets installed to $PUBLIC_DIR"
echo "======================================================"
echo ""
echo "Struktur yang tersedia:"
echo "  public/sbadmin2/"
echo "  ├── css/sb-admin-2.min.css"
echo "  ├── js/sb-admin-2.min.js"
echo "  ├── js/demo/"
echo "  ├── vendor/jquery/"
echo "  ├── vendor/bootstrap/"
echo "  ├── vendor/jquery-easing/"
echo "  ├── vendor/fontawesome-free/"
echo "  └── img/"
echo ""
echo "Sekarang jalankan:"
echo "  ./vendor/bin/sail up -d"
echo "  ./vendor/bin/sail artisan migrate"
echo ""
