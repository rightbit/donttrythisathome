#!/usr/bin/env bash
# thanos.sh - snap half the files in a directory.

set -euo pipefail

TARGET="$1"

COUNT=$(find "$TARGET" -type f -print0 | tr -cd '\0' | wc -c)
HALF=$((COUNT / 2))

echo "Found $COUNT files, snapping $HALF"

TMP=$(mktemp)
trap 'rm -f "$TMP"' EXIT

find "$TARGET" -type f -print0 \
  | sort -z -R \
  | head -z -n "$HALF" > "$TMP"

xargs -0 -r rm -f < "$TMP"

echo "Snapped $HALF files."
