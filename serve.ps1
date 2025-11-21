param(
    [int]$Port = 8000
)

Write-Host "Starting local HTTP server from: $PWD on port $Port"

# Prefer Python launcher 'py' (Windows), then 'python', then npx http-server
if (Get-Command py -ErrorAction SilentlyContinue) {
    Write-Host "Using 'py' to start http.server..."
    py -m http.server $Port
} elseif (Get-Command python -ErrorAction SilentlyContinue) {
    Write-Host "Using 'python' to start http.server..."
    python -m http.server $Port
} elseif (Get-Command npx -ErrorAction SilentlyContinue) {
    Write-Host "Using 'npx http-server'..."
    npx http-server -p $Port
} else {
    Write-Host "No suitable server found. Install Python 3 or Node.js (npx)."
    exit 1
}
