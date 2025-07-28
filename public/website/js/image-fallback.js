/**
 * Image Fallback Handler for E-Learning Website
 * Handles image loading errors and provides fallback images
 */

class ImageFallbackHandler {
    constructor() {
        this.fallbackImage = 'https://www.safetysign.co.id/image-upload/news-jasa-pembuatan-e-learning-457.jpg';
        this.init();
    }

    init() {
        // Handle all images with error fallback
        this.handleImageErrors();
        
        // Add loading states
        this.addLoadingStates();
        
        // Add hover effects for fallback images
        this.addHoverEffects();
    }

    handleImageErrors() {
        const images = document.querySelectorAll('img');
        
        images.forEach(img => {
            img.addEventListener('error', (e) => {
                this.setFallbackImage(e.target);
            });
            
            img.addEventListener('load', (e) => {
                this.addImageStyles(e.target);
            });
        });
    }

    setFallbackImage(imgElement) {
        // Prevent infinite loop
        if (imgElement.src.includes('safetysign.co.id')) {
            return;
        }
        
        // Set fallback image
        imgElement.src = this.fallbackImage;
        
        // Add fallback styles
        this.addFallbackStyles(imgElement);
        
        // Add loading animation
        this.addLoadingAnimation(imgElement);
    }

    addImageStyles(imgElement) {
        // Add common styles for all images
        imgElement.style.borderRadius = '8px';
        imgElement.style.boxShadow = '0 4px 15px rgba(0,0,0,0.1)';
        imgElement.style.transition = 'all 0.3s ease';
        
        // Add specific styles for fallback images
        if (imgElement.src.includes('safetysign.co.id')) {
            this.addFallbackStyles(imgElement);
        }
    }

    addFallbackStyles(imgElement) {
        // Add special styles for fallback images
        imgElement.style.borderRadius = '10px';
        imgElement.style.boxShadow = '0 6px 20px rgba(0,0,0,0.15)';
        imgElement.style.border = '2px solid #667eea';
        
        // Add a subtle overlay
        this.addImageOverlay(imgElement);
    }

    addImageOverlay(imgElement) {
        // Create overlay container
        const overlay = document.createElement('div');
        overlay.className = 'image-overlay';
        overlay.innerHTML = `
            <div class="overlay-content">
                <i class="fas fa-graduation-cap"></i>
                <span>E-Learning</span>
            </div>
        `;
        
        // Style the overlay
        overlay.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.8) 0%, rgba(118, 75, 162, 0.8) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            border-radius: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
        `;
        
        // Style the overlay content
        const overlayContent = overlay.querySelector('.overlay-content');
        overlayContent.style.cssText = `
            text-align: center;
            font-weight: bold;
        `;
        
        // Add hover effect
        imgElement.parentElement.style.position = 'relative';
        imgElement.parentElement.appendChild(overlay);
        
        imgElement.parentElement.addEventListener('mouseenter', () => {
            overlay.style.opacity = '1';
        });
        
        imgElement.parentElement.addEventListener('mouseleave', () => {
            overlay.style.opacity = '0';
        });
    }

    addLoadingStates() {
        // Add loading spinner for images
        const images = document.querySelectorAll('img');
        
        images.forEach(img => {
            // Create loading spinner
            const spinner = document.createElement('div');
            spinner.className = 'image-loading-spinner';
            spinner.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
            
            // Style the spinner
            spinner.style.cssText = `
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: #667eea;
                font-size: 24px;
                z-index: 10;
            `;
            
            // Add spinner to image container
            if (img.parentElement) {
                img.parentElement.style.position = 'relative';
                img.parentElement.appendChild(spinner);
                
                // Remove spinner when image loads
                img.addEventListener('load', () => {
                    spinner.remove();
                });
                
                img.addEventListener('error', () => {
                    spinner.remove();
                });
            }
        });
    }

    addHoverEffects() {
        // Add hover effects for all images
        const images = document.querySelectorAll('img');
        
        images.forEach(img => {
            img.addEventListener('mouseenter', () => {
                img.style.transform = 'scale(1.02)';
                img.style.boxShadow = '0 8px 25px rgba(0,0,0,0.2)';
            });
            
            img.addEventListener('mouseleave', () => {
                img.style.transform = 'scale(1)';
                img.style.boxShadow = img.src.includes('safetysign.co.id') 
                    ? '0 6px 20px rgba(0,0,0,0.15)' 
                    : '0 4px 15px rgba(0,0,0,0.1)';
            });
        });
    }

    addLoadingAnimation(imgElement) {
        // Add a subtle loading animation
        imgElement.style.opacity = '0';
        imgElement.style.transform = 'scale(0.95)';
        
        setTimeout(() => {
            imgElement.style.transition = 'all 0.5s ease';
            imgElement.style.opacity = '1';
            imgElement.style.transform = 'scale(1)';
        }, 100);
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new ImageFallbackHandler();
});

// Export for global use
window.ImageFallbackHandler = ImageFallbackHandler; 