<?php
$currentSlug = 'destructive-unconfirmed';
$basePath = '../';

require_once __DIR__ . '/../includes/data.php';

$currentTest = $tests[$currentSlug];
$pageTitle = $currentTest['name'];

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<main class="py-4">
  <div class="container-fluid px-lg-4">
    <?php require_once __DIR__ . '/../includes/diagnostic_header.php'; ?>

    <div class="row g-4">
      <!-- Section A: Failing Trigger -->
      <div class="col-lg-6">
        <div class="card comparison-card comparison-card-failing h-100 bg-white shadow-sm">
          <div class="card-header bg-danger bg-opacity-10 py-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
              <span class="badge card-badge-failing px-2 py-1"><i class="bi bi-x-circle-fill me-1"></i> Section A</span>
              <h2 class="h6 fw-bold mb-0 text-danger">Intentional Failure Trigger</h2>
            </div>
            <span class="badge bg-danger text-white">Triggers <?= htmlspecialchars($currentTest['rule']) ?></span>
          </div>

          <div class="card-body d-flex flex-column">
            <p class="text-muted small mb-3">
              This destructive button executes an irreversible account purge <strong>immediately on a single click</strong>. There is no confirmation dialog, no friction gate, and no undo buffer, violating NN/g Heuristic #5 (Error Prevention).
            </p>

            <div class="sandbox-canvas mb-4 flex-grow-0">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="fw-bold small text-secondary"><i class="bi bi-exclamation-diamond text-danger me-1"></i> Dangerous 1-Click Destructive Action</span>
                <span class="badge bg-danger-subtle text-danger">Zero Confirmation</span>
              </div>

              <!-- FAILING 1-CLICK DESTRUCTIVE BUTTON -->
              <div class="p-3 bg-white rounded border border-danger-subtle mb-3">
                <h6 class="fw-bold text-danger mb-1"><i class="bi bi-trash3-fill me-1"></i> Danger Zone</h6>
                <p class="small text-muted mb-3">Permanently delete organization workspace, member records, and all financial data.</p>
                
                <button type="button" class="btn btn-danger" onclick="showToast('ACCOUNT DELETED: Single click caused immediate irreversible data loss!', 'danger')">
                  <i class="bi bi-trash-fill me-1"></i> Delete Account &amp; Wipe All Data (Instant)
                </button>
              </div>

              <div class="alert alert-danger py-2 small mb-0">
                <i class="bi bi-radioactive me-1"></i> <strong>Usability Risk:</strong> A single accidental tap immediately destroys production data.
              </div>
            </div>

            <div class="mt-auto">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <span class="small fw-bold text-muted"><i class="bi bi-code-slash me-1"></i> Triggering DOM Markup</span>
              </div>
              <div class="code-preview">
                <button class="btn btn-sm btn-outline-light code-copy-btn" data-target="code_fail_9">Copy</button>
                <pre id="code_fail_9" class="mb-0"><code><?= htmlspecialchars($currentTest['failing_snippet']) ?></code></pre>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Section B: Remediated Standard -->
      <div class="col-lg-6">
        <div class="card comparison-card comparison-card-remediated h-100 bg-white shadow-sm">
          <div class="card-header bg-success bg-opacity-10 py-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
              <span class="badge card-badge-remediated px-2 py-1"><i class="bi bi-check-circle-fill me-1"></i> Section B</span>
              <h2 class="h6 fw-bold mb-0 text-success">Remediated Standard</h2>
            </div>
            <span class="badge bg-success text-white">NN/g Error Prevention Compliant</span>
          </div>

          <div class="card-body d-flex flex-column">
            <p class="text-muted small mb-3">
              Protected by a two-step confirmation dialog with intentional cognitive friction (requires typing <kbd>DELETE</kbd>) and an undoable state simulation.
            </p>

            <div class="sandbox-canvas mb-4 flex-grow-0">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="fw-bold small text-secondary"><i class="bi bi-shield-lock-fill text-success me-1"></i> Protected Destructive Flow</span>
                <span class="badge bg-success-subtle text-success">2-Step Friction Gate</span>
              </div>

              <!-- REMEDIATED CONFIRMATION TRIGGER -->
              <div class="p-3 bg-white rounded border border-success-subtle mb-3">
                <h6 class="fw-bold text-dark mb-1"><i class="bi bi-shield-check text-success me-1"></i> Protected Danger Zone</h6>
                <p class="small text-muted mb-3">Permanently delete organization workspace with safeguards.</p>
                
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">
                  <i class="bi bi-trash3 me-1"></i> Delete Account...
                </button>
              </div>

              <div class="alert alert-success py-2 small mb-0">
                <i class="bi bi-check-circle-fill me-1"></i> <strong>Safe Architecture:</strong> Confirmation modal forces conscious confirmation before committing destruction.
              </div>
            </div>

            <div class="mt-auto">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <span class="small fw-bold text-muted"><i class="bi bi-code-slash me-1"></i> Remediated Markup</span>
              </div>
              <div class="code-preview">
                <button class="btn btn-sm btn-outline-light code-copy-btn" data-target="code_remed_9">Copy</button>
                <pre id="code_remed_9" class="mb-0"><code><?= htmlspecialchars($currentTest['remediated_snippet']) ?></code></pre>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Two-Step Confirmation Modal -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="delModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-danger">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="delModalLabel"><i class="bi bi-exclamation-triangle-fill me-2"></i>Confirm Irreversible Deletion</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-danger fw-medium mb-2">Warning: All workspaces, databases, and billing profiles will be permanently erased.</p>
        <p class="small text-muted mb-2">To prevent accidental deletion, please type <strong class="text-dark">DELETE</strong> in the box below:</p>
        <input type="text" id="confirmPhraseInput" class="form-control mb-2" placeholder="Type DELETE here">
        <div class="form-text small">Button enables only when the confirmation keyword is typed exactly.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel &amp; Keep Account</button>
        <button type="button" id="confirmDeleteSubmit" class="btn btn-danger" disabled>
          <i class="bi bi-trash-fill me-1"></i> I Understand, Delete Everything
        </button>
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
