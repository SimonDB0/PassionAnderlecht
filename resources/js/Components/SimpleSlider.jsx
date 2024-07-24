import React, { useState, useEffect } from 'react';

const SimpleSlider = ({ images }) => {
    const [currentIndex, setCurrentIndex] = useState(0);
    const slideInterval = 3000; // Intervalle en millisecondes

    useEffect(() => {
        const intervalId = setInterval(() => {
            setCurrentIndex((prevIndex) => {
                const nextIndex = (prevIndex + 1) % images.length;
                return nextIndex;
            });
        }, slideInterval);

        return () => clearInterval(intervalId); // Nettoyage de l'intervalle lors du démontage
    }, [images.length]);

    const prevSlide = () => {
        setCurrentIndex((prevIndex) => {
            const isFirstSlide = prevIndex === 0;
            const newIndex = isFirstSlide ? images.length - 1 : prevIndex - 1;
            return newIndex;
        });
    };

    const nextSlide = () => {
        setCurrentIndex((prevIndex) => {
            const isLastSlide = prevIndex === images.length - 1;
            const newIndex = isLastSlide ? 0 : prevIndex + 1;
            return newIndex;
        });
    };

    return (
        <div className="relative w-full h-40 overflow-hidden">
            <div className="absolute inset-0 flex items-center justify-between px-4">
                <button onClick={prevSlide} className="text-white bg-gray-800 p-2 rounded-full hover:bg-gray-600">
                    ‹
                </button>
                <button onClick={nextSlide} className="text-white bg-gray-800 p-2 rounded-full hover:bg-gray-600">
                    ›
                </button>
            </div>
            <div className="flex transition-transform duration-500" style={{ transform: `translateX(-${currentIndex * 100}%)` }}>
                {images.map((image, index) => (
                    <div key={index} className="w-full flex-shrink-0">
                        <img
                            src={image.url}
                            alt={`Slide ${index}`}
                            className=" object-cover w-full h-50"

                        />
                    </div>
                ))}
            </div>
        </div>
    );
};

export default SimpleSlider;
